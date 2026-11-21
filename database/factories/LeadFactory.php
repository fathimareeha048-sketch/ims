<?php

namespace Database\Factories;

use App\Models\Lead;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lead>
 */
class LeadFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'phone' => '07' . fake()->unique()->numberBetween(100000000, 999999999),
            'email' => fake()->unique()->safeEmail(),
            'course' => fake()->randomElement(['IT', 'English', 'Spoken English', 'Graphic Design', 'Accounting']),
            'stage' => fake()->randomElement(['New', 'Contacted', 'Follow-up', 'Enrolled']),
            'source' => fake()->randomElement(['Walk-in', 'Phone', 'Facebook', 'WhatsApp']),
            'follow_up_date' => fake()->dateTimeBetween('-5 days', '+7 days'),
            'notes' => fake()->sentence(),
        ];
    }
}