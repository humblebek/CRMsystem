<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Order::create([
//            'admin_id'=>1,
//            'name'=>'Joe Biden',
//            'phone'=>'+648657834',
//            'product'=>'Laptop',
//            'price'=>'234',
//            'status'=>2
//        ]);
        Order::factory(20)->create();
    }
}
