<?php

namespace App\Http\Controllers\Client\Packs;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('client.packs.index');
    }
}
