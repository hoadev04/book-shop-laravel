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
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'payment_method' => $this->faker->randomElement(['credit_card', 'paypal', 'cash']),
            'buy_date' => $this->faker->date,
            'status' => $this->faker->randomNumber(1, 3),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
