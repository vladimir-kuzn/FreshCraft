<?php

namespace App\Http\Controllers\Admin\Images;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetController extends Controller
{
    public function upload(Request $request)
    {
        foreach ($request->file('image') as $file){
            if($file->getMimeType() == "image/jpeg") {
                $file->store('public/images/ForPosts');
                return "Успешно!";
            }
            elseif ($file->getMimeType() == "image/png") {
                $file->store('public/images/ForPosts');
                return "Успешно!";
            }
            elseif ($file->getMimeType() == "image/gif"){
                $file->store('public/images/ForPosts');
                return "Успешно!";
            }
            elseif ($file->getMimeType() == "image/svg+xml"){
                $file->store('public/images/ForPosts');
                return "Успешно!";
            }
            else{
                return "FAIL !!!";
            }
        }
    }
}
