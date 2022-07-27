<?php

namespace Database\Seeders;
use Carbon\Carbon;
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
        $admin = User::create([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // create worker user
        $worker = User::create([
            'id' => 2,
            'name' => 'Worker',
            'email' => 'worker@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' =>  bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // create systems
        $worker = User::create([
            'id' => 3,
            'name' => 'Pedro reyes',
            'email' => 'peter@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' =>  bcrypt('871264'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
