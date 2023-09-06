<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use App\Models\Word;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
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
        $fields = $request -> validate([
            'definition_text' => 'required'
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
