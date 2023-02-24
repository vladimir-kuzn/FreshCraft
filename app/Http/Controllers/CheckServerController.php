<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckServerController extends Controller
{
    public function __invoke()
    {
        $ch = curl_init('http://freshcraft.freshcrafting.com/health');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        $html = curl_exec($ch);
        curl_close($ch);
        $html = json_decode($html, true);

        //return dd($html);
        return response()->json($html);
    }
}
