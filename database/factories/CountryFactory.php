<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code'=>$this->faker->unique()->regexify('[A-Z]{3}'),
            'name'=>$this->faker->unique()->regexify('[A-Z]{4,50}'),
            'continent'=>$this->faker->randomElement(['AFRICA', 'AMERICA', 'ANTARCTICA', 'ASIA', 'EUROPE', 'OCEANIA']),
        ];
    }
}
