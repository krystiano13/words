<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use App\Models\Word;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    public function form($word_id) {
        if(!auth() -> check()) return redirect('/');
        $wordQuery = Word::where('id',$word_id);
        if($wordQuery -> count() <= 0) return redirect('/');

        return view('form', ['mode' => 'partial', 'word_id' => $word_id]);
    }

    public function render($word_id) {
        $query = Definition::where('word_id', $word_id);
        $count =  $query -> count();
        $wordQuery = Word::where('id',$word_id);

        if($wordQuery -> count() <= 0) return redirect('/');

        if($count > 0) {
           $text = $query -> get('definition_text');
           return view('word', [
                'text' => $text[0] -> definition_text,
                'word' => $wordQuery -> get()
            ]);
        } 
        else {
            return view('word', [
                'text' => NULL,
                'word' => $wordQuery -> get()
            ]);
        }   
    }

    public function add($word_id,Request $request) {
        if(!auth() -> check()) return redirect('/');
        $fields = $request -> validate([
            'definition_text' => ['required', 'min:1', 'max:240']
        ]);

        if($word_id) {

            $fields['definition_text'] = strip_tags($fields['definition_text']);

            Definition::create(
                [
                    'definition_text' => $fields['definition_text'],
                    'word_id' => $word_id
                ]
            );
        }

        return redirect('/');
    }
}
