<?php

use Illuminate\Support\Facades\Route;

$post=[
    1=>['title'=>'Laravel'],
    2=>['title'=>'React']
];

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');

Route::view('/home', 'home');

Route::get('/posts/{id}/{book}',function($id, $book){
    return "$id $book";
});

Route::get('/home','HomeController@home')->name('home');

// return view('posts.show',[data=>$post[$id]]);



