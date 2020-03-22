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
    return view('home');
});

Route::get('/first', function(){
     return view('first');
});

Route::get('/sec', function(){
    return view('sec');
});

Route::get('/homenew', 'ViewPage1@dakhao');

Route::get('/home', function(){
    return view('home');
});

Route::get('/thr', function(){
    return view('thr');
});

Route::get('/fr', function(){
    return view('fr');
});

Route::get('/res', function(){
    return view('res');
});

Route::get('/nores', function(){
    return view('nores');
});