<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PostCreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }
}
