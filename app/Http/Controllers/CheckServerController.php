<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utility\Rcon;

class CheckServerController extends Controller
{
    public function __invoke()
    {
        if($this->is_rcon_connection_successful()) {
            return response()->json(['status' => "running"], 201);
        } else {
            return response()->json(['status' => "down"], 500);
        }
    }

    private function is_rcon_connection_successful()
    {
        try {
            $rcon = new Rcon("freshcraft.freshcrafting.com", env("RCON_PORT"), env("RCON_PASSWORD"), 2);
            return $rcon->connect();
        } catch(\Exception $e){
            return false;
        }
    }
}
