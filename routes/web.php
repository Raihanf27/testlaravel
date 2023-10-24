<?php

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

Route::get('/kedua', function () {
    echo "hello world";
});

Route::get('/home', function () {
    return view('home');
});

Route::redirect('/alihkan', '/');

Route::get('/parameter/{id}', function($id){
    echo "how are you".$id;
});

Route::group(['prefix' => 'admin'], function(){
    Route::get('/parameter/{id}', function($id){
        echo "how are you".$id;
    });

    Route::get('/dashboard', function (){
        echo "how are you?" ;
    });
});


