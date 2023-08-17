<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'id' => 1,
            'name' => 'David Rodriguez',
            'email' => 'david@david.com',
            'password' => 'holasoydavid',
        ]);
    }
}
