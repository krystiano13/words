<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        $fields = $request -> validate([
            'name' => ['required', 'unique:users'],
            'email' => ['email', 'required', 'unique:users'],
            'password' => ['required','min:8','confirmed'],
        ]);

        $fields['password'] = bcrypt($fields['password']);

        $user = User::create($fields);

        auth() -> login($user);

        return redirect('/');
    }

    public function login(Request $request) {
        $fields = $request -> validate([
            'name' => ['required'],
            'password' => ['required']
        ]);

        if(auth() -> attempt(['name' => $fields['name'], 'password' => $fields['password']])) {
            return redirect('/');
        }
        else {
            return redirect() -> back() -> withErrors(
                ['fields' => 'Incorrect username or password']
            );
        }
    }

    public function logout() {
        auth() -> logout();
        return redirect('/');
    }
}
