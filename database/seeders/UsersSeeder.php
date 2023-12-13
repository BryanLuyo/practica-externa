<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $task = [
            [
                'name' => 'Bryan Andy Luyo',
                'email' => 'dev@bryanluyo.site',
                'password' => Hash::make('123456'),
            ],
        ];

        DB::table('users')->insert($task);
    }
}
