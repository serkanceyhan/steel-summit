<?php

namespace Database\Factories;

use App\Models\Attendee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Attendee>
 */
class AttendeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'company' => fake()->company(),
            'title' => fake()->jobTitle(),
            'payment_status' => fake()->randomElement(['pending', 'approved', 'cancelled', 'failed']),
            'amount_paid' => fake()->randomFloat(2, 0, 5000),
            'currency' => fake()->randomElement(['USD', 'EUR', 'TRY']),
            'qr_code_path' => null,
        ];
    }
}
