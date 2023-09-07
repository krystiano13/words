<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WordController extends Controller
{

    public function form() {
        if(!auth() -> check()) return redirect('/');
        return view('form', ['mode' => 'all']);
    }

    public function render() {
        $words = Word::all();
        return view('home', [ 'words' => $words ]);
    }

    public function add(Request $request, Validator $validator) {
       if(!auth() -> check()) return redirect('/');
       $fields = $request -> validate([
            'name' => ['required']
       ]);

       $word = Word::create($fields);

       if($request -> get('definition_text')) {
            $text = $request -> get('definition_text');
            $valid = $validator::make($request -> all(), ['definition_text' => 'required']);
            if($valid -> fails()) return redirect('/');

            $text = strip_tags($text);

            Definition::create([
                'definition_text' => $text,
                'word_id' => $word -> id
            ]);
       }


       return redirect('/');
    }
}
