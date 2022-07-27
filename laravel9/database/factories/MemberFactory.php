<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fname'    => fake()->firstNameMale(),
            'lname'    => fake()->lastName(),
            'company'  => fake()->company(),
            'country'  => fake()->country(),
            'city'     => fake()->city(),
            'address'  => fake()->address(),
            'postcode' => fake()->postcode(),
            'phone'    => fake()->phoneNumber(),
            'email'    => fake()->safeEmail(),
        ];
    }
}
