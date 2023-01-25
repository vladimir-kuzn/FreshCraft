<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Category;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        if (isset($_POST['create']))
        {
            $data = $request->validated();

            $this->service->store($data);

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
