<?php

namespace App\Http\Controllers\Client\Launcher;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('client.launcher.index');
    }
}
