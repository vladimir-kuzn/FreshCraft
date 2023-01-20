<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'user',
            'guard_name' => 'web',
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'admin',
            'guard_name' => 'web',
        ]);
    }
}
