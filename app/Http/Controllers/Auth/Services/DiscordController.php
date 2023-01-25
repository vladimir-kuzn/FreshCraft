<?php

namespace App\Http\Controllers\Auth\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class DiscordController extends Controller
{
    public function login()
    {
        $user = Socialite::driver('discord')->stateless()->user();
        return dd($user->user);
    }

    public function callback()
    {

    }
}
