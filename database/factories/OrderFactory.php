<?php

namespace Database\Factories;

use App\Models\OrderDetail;
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
    public function definition()
    {
        // Just for demonstrating purposing, create a random user with existing random data, even if it is inconsistent
        return [
            'id_order'            => $this->faker->numberBetween(301, 5000),
            'reference'           => $this->faker->numberBetween(1000000, 2000000),
            'id_customer'         => $this->faker->numberBetween(1,100),
            'id_address_delivery' => $this->faker->numberBetween(1,100),
            'current_state'       => $this->faker->numberBetween(1,8),
            'total_paid'          => $this->faker->numberBetween(1,100),
            'date_add'            => now()
        ];
    }

    public function withRandomNumberOfProducts(int $min, int $max)
    {
        return $this->afterCreating(function ($order) use ($min, $max) {
            $order->order_details()->saveMany(
                OrderDetail::factory()
                    ->count(random_int($min, $max))
                    ->make()
            );
        });
    }

}
