<?php

namespace App\Http\Controllers\Client\Shop;

use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function __invoke()
    {
        return view('client.shop.shop');
    }
}
