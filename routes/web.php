<?php

use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WordController::class, 'render']);

Route::get('/registerView', fn() => view('register'));
Route::get('/loginView', fn() => view('login'));
Route::get('/wordView/{word_id}',[DefinitionController::class, 'render']);
Route::get('/wordForm/word', [WordController::class, 'form']);
Route::get('/wordForm/definition/{word_id}', [DefinitionController::class, 'form']);

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/addWord',[WordController::class, 'add']);
Route::post('/addDefinition/{word_id}', [DefinitionController::class, 'add']);

