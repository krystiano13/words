<?php

use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register',[UserController::class,'register']);
Route::post('/addWord',[WordController::class, 'add']);
Route::put('/addDefinition/{word_id}', [DefinitionController::class, 'add']);
