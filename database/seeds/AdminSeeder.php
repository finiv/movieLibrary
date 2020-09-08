<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@amin.com',
            'password' => 'secret',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'isAdmin' => true
        ]);
    }
}
