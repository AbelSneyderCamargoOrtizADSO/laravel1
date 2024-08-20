<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user -> name = "ADMIN Jose";
        $user -> email = "admin@gmail.com";
        $user -> password = bcrypt("Admin1234");

        $user -> save();

        // CREAR 10 USUARIOS CON LA FABRICA (FACTORY)
        User::factory(10)->create();
    }
}
