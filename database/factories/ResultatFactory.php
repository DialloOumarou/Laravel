<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resultat>
 */
class ResultatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->randomElement([
                'ousmane sonko','amadou ba',
                'anta babacar ngom','khalifa sall',
                'aliou mamadou dia','idrissa seck'
            ]),
            //'prenom'=>fake()->firstName(),
            'nbre_voix'=>fake()->numberBetween(1,10)
        ];
    }
}
