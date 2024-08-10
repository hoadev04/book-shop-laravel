<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->userName,
            'username' => $this->faker->sentence,
            'phone' => $this->faker->randomNumber(10),

            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // Mật khẩu giả lập
            'role' => $this->faker->randomElement(['user', 'admin']),
        ];
    }
}
