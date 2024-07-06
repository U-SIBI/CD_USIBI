<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LSTMController;


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

Route::get('/home', function () {
    // return view('welcome');
    return view('home');
});

Route::get('/menu', function () {
    
    return view('menu', [
    ]);
});

Route::get('/sibi', function () {
    // return view('welcome');
    return view('sibi');
});

Route::get('/basic', function () {
    // return view('welcome');
    return view('basic');
});

Route::get('/history', function () {
    // return view('welcome');
    return view('history');
});
Route::get('/advance', function () {
    // return view('welcome');
    return view('advance');
});

Route::get('/image', function () {
    // return view('welcome');
    return view('imageTranslate');
});

Route::post('/image', [App\Http\Controllers\ImageController::class, 'upload'])->name('upload');

Route::get('/live', function () {
    // return view('welcome');
    return view('live');
});

Route::get('/live', [LSTMController::class, 'index']);
Route::get('/live/data', [LSTMController::class, 'index']);

Route::get('/about', function () {
    // return view('welcome');
    return view('about');
});

Route::get('/test', function () {
    
    return view('test');
});

Route::get('/test2', function () {
    
    return view('test2');
});

Route::get('/test3', function () {
    
    return view('test3');
});


Route::get('/flask', function () {
    
    return view('flask');
});


Route::get('/index', 'App\Http\Controllers\YouTubeController@index')->name('index');
Route::get('/results', 'App\Http\Controllers\YouTubeController@results')->name('results');
Route::get('/watch/{videoId}/{playlistId}', 'App\Http\Controllers\YouTubeController@watch')->name('watch');


Route::post('/upload-image', [ImageController::class, 'uploadImage'])->name('upload.image');







