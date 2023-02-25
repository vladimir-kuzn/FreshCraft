<?php

namespace App\Http\Controllers\Admin\Images;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetController extends Controller
{
    public function upload(Request $request)
    {
        $paths = [];

        foreach ($request->file('image') as $file){
            $paths[] = $file->store('public/images/ForPosts');
        }

        dd($paths);
    }
}
