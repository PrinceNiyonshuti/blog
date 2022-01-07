<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts',[
            'posts'=> Post::latest()->filter(request(['search']))->get(),
            'categories'=>Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post',[
            'post'  => $post
        ]);
    }


    // protected function getPosts(){

    //     return Post::latest()->filter()->get();

    //     // Making a search functionality
    //     $posts = Post::latest();

    //     // dd(request('search'));
    //     if(request('search')){
    //         $posts
    //         ->where('title','like','%' . request('search') . '%')
    //         ->orWhere('body','like','%' . request('search') . '%');
    //     }

    //     return $posts->get();
    // }
}
