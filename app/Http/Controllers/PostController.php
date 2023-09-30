<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function store()
    {
        $post = Post::create([
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
        ]);

        $post->notify(new \App\Notifications\PostPublished());

        return back();
    }

    public function show(Post $post)
    {
        dd($post);
    }
}
