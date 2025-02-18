<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }
    public function post($id){
        $posts=[
            1=>['title'=>'laravel'],
            2=>['title'=>'react']
        ];
        return view('post.show',['data'=>$posts[$id]]);
    }
}
