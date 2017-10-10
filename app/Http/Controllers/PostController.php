<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id){
//        dd($id);
        return view('post');
    }
    public function _list()
    {
        return view('posts');
    }
}
