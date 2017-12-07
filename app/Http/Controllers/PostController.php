<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id){
        $post= Post::where('id',$id)->where('status',1)->first();
        $post->enDate = date('d\t\h M Y',strtotime($post->created_at));
        return view('post',compact('post'));
    }
    public function _list(Request $request)
    {
        if($request->isMethod('post')){
            if ($request->from=='index'){
                $posts = Post::where('status',1)->where('system_cate_id',2)->orderBy('created_at', 'desc')->take(3)->get();
            }else{
                $posts = Post::where('status',1)->where('system_cate_id',2)->get();
            }

            return $posts;
        }
        if($request->isMethod('get')){
            $posts = Post::where('status',1)->where('system_cate_id',2)->orderBy('created_at', 'desc')->get();
            return view('posts',compact('posts'));
        }

    }
}
