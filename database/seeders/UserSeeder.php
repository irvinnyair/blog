<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Irvin Yair Bustamante Hernandez',
            'email' => 'irvinn.yair@gmail.com',
            'password' => bcrypt('Miyabi12')
        ])->assignRole('Admin');
        User::factory(99)->create();
    }
}
