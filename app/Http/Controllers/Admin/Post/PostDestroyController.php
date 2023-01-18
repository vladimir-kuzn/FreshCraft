<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostDestroyController extends Controller
{
    public function __invoke(Post $category)
    {
        $category->delete();
        return redirect()->route('admin.posts.');
    }
}
