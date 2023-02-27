<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class InDevelopmentController extends Controller
{

    public function __invoke()
    {
        return view('client.InDevelopment');
    }
}
