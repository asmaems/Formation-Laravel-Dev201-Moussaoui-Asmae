<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');

Route::view('/home', 'home');

Route::get('/posts/{id}/{book}',function($id, $book){
    return "$id $book";
});

Route::get('/show',function(){
  $post=[
    1=>['title'=>'Laravel'],
    2=>['title'=>'React']
];
  return view('posts.show',['data'=>$post]);
});

Route::get('/home','HomeController@home')->name('home');
// Route::get('/home',[HomeController::class, 'home'] );




