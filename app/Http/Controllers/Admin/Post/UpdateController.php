<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        if (isset($_POST['edit']))
        {
            $data = $request->validated();

            $this->service->update($post, $data);

            return redirect()->route('admin.posts.');
        }
        elseif (isset($_POST['preview']))
        {
            $post = $request;
            $categories = Category::all();
            return view('main.post', compact('post', 'categories'));
        }
    }
}
