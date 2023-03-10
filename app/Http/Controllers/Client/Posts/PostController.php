<?php

namespace App\Http\Controllers\Client\Posts;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        return view('client.posts.post', compact('post', 'categories'));
    }
}
