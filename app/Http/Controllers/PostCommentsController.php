<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostCommentsController extends Controller
{
    public function store(Post $post)
    {
        // validate the request
        request()->validate([
            'body' => 'required'
        ]);

        // add data for the comments from request
        $post->comments()->create([
            'user_id' => request()->user()->id,
            'body'=>request('body')
        ]);


        // redirect back
        return back();
    }
}
