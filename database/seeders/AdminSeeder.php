<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', '=', env('EMAIL_ADMIN'))->first();

        DB::table('model_has_roles')->insert([
            'role_id' => '2',
            'model_type' => 'App\Models\User',
            'model_id' => $user->id,
        ]);
    }
}
