<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // Array comics
    $comics = config('comics');

    return view('components.comics', ['comics' => $comics]);
});

Route::get('/comic/info/{id}', function($id) {

    // Array comics
    $comics = config('comics');
    
    // Se non esiste l'indice restituisco page not found
    abort_unless(isset($comics[$id]), 404);

    // Info singolo comic
    $comic_info = $comics[$id];


    return view('components.comicInfo', ['comic' => $comic_info]);
})->where('id', '[0-9]+')->name('comic/info');