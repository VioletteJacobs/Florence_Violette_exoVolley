<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // "name" => $this->faker->lastName(),
            // "city" => $this->faker->city(),
            // "country" => $this->faker->state(),
            // "max" =>$this->faker->randonElement($array = array ('10,15')),

        ];
    }
}