<?php

namespace App\Http\Controllers\Client\Servers;

use App\Http\Controllers\Controller;

class ServerController extends Controller
{
    public function __invoke()
    {
        return view('client.servers.server');
    }
}
