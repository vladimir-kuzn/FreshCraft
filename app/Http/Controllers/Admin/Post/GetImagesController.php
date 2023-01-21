<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GetImagesController extends Controller
{
    public function __invoke()
    {
        $files = Storage::allFiles('public/images/forPost');
        return response($files, 200);
    }
}
