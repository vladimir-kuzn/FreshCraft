<?php

namespace App\Http\Controllers\Admin\Images;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DelController extends Controller
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
