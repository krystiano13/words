<?php

use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/registerView', fn() => view('register'));
Route::get('/loginView', fn() => view('login'));

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/addWord',[WordController::class, 'add']);
Route::post('/addDefinition/{word_id}', [DefinitionController::class, 'add']);
