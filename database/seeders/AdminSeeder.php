<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suser = User::create([
            // 'role_id'=>'1',
            'name'=>'Shavkat Mirziyoyev',
            'email'=>'sadmin@gmail.com',
            'password'=>bcrypt('sad12345'),
            'income'=>'0'
        ]);
        $suser->assignRole('SuperAdmin');

        $admin = User::create([
            'name'=>'Abdulla Aripov',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'income'=>'0'
        ]);

        $admin->assignRole('Admin');

         $admin = User::create([
            'name'=>'Tanzila Norboyeva',
            'email'=>'admin1@gmail.com',
            'password'=>bcrypt('admin123'),
            'income'=>'0'
        ]);
        $admin->assignRole('Admin');

    }
}
