<?php

namespace App\Http\Controllers\Client\Contacts;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('client.contacts.index');
    }
}
