<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Speaker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Speaker>
 */
class SpeakerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'name' => fake()->name(),
            'title' => fake()->jobTitle(),
            'bio' => fake()->optional()->paragraph(),
            'image_path' => null,
            'linkedin_url' => fake()->optional()->url(),
        ];
    }
}
