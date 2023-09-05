<?php

namespace App\Http\Controllers;

use App\Models\Definition;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    public function add($word_id,Request $request) {
        $fields = $request -> validate([
            'definition_text' => 'required'
        ]);

        if($word_id) {
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
