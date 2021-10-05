<?php

namespace Database\Factories;

use App\Models\Etudiant;
use App\Models\User;
use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Etudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "adresse"      => $this->faker->address(),
            "telephone"    => $this->faker->phoneNumber(),
            "ddn"          => $this->faker->dateTimeThisCentury(),
            "ville_id"     => Ville::all()->random()->id,
            "user_id"      => User::factory()->create()->id,
        ];
    }
}
