<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create($request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]));

        return redirect()->route('posts.create')
                         ->with('message', 'Your post was successfully created');
    }
}
