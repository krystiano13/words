<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function render() {
        $words = Word::all();
        return view('home', [ 'words' => $words ]);
    }

    public function add(Request $request) {
       $fields = $request -> validate([
            'name' => ['required']
       ]);

       $word = Word::create($fields);

       if($request -> get('definition_text')) {
            Definition::create([
                'definition_text' => $request -> get('definition_text'),
                'word_id' => $word -> id
            ]);
       }

       return redirect('/');
    }
}
