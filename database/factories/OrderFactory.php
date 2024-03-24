<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

            return [
            'admin_id'=>null,
            'name'=>fake()->name(),
            'phone'=>fake()->phoneNumber(),
            'product'=>fake()->word(),
            'price'=>fake()->numberBetween(160,600),
            'status'=>2
            ];

    }
}
