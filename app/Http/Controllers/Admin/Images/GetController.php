<?php

namespace App\Http\Controllers\Admin\Images;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GetController extends Controller
{
    public function __invoke()
    {
        $files = Storage::allFiles('public/images/forPost');
        return response($files, 200);
    }
}
