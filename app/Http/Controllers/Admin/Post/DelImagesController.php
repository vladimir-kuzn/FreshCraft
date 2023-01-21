<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DelImagesController extends Controller
{
    public function __invoke(Request $request)
    {
        $files = Storage::allFiles('public/images/forPost');
        $i = $request->query('image');
        if (Storage::delete($files[$i])){
            return response("OK", 200);
        }else{
            return response("NOT OK", 404);
        }
    }
}
