<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LauncherController extends Controller
{
    public function __invoke()
    {
        return view('main.launcher');
    }
}
