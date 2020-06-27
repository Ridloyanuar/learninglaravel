<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
// $name = request('name');
// // return "My Name is" .$name;

//     return view('home', ['name' => $name]);
// });

Route::get('/', 'HomeController');

Route::get('posts/{slug}', 'PostController@show');
// Route::get('/show', 'PostController@show');

Route::view('contact', 'contact');

Route::view('about', 'about');

Route::view('login', 'login');
