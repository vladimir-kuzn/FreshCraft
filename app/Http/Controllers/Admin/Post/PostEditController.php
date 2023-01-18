<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostEditController extends Controller
{
    public function __invoke(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }
}
