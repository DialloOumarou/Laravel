<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidat>
 */
class CandidatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->unique()->randomElement([
                'ousmane sonko','amadou ba',
                'matar drame','moussa faye'
            ]),
           // 'prenom'=>fake()->firstName(),
            'parti'=>fake()->sentence(),
        ];
    }
}
