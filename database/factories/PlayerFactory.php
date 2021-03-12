<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // return [
        //     "name" => $this->faker->firstName(),
        //     "firstname" => $this->faker->surname(),
        //     "age" => $this->faker->numberBetween(25,89),
        //     "phone" =>$this->phoneNumber(),
        //     "email" => $this->faker->email(),
        //     "country" => $this->faker->state(),
        //     "gender" => $this->faker->gender(),
        //     "role" => $this->faker->email(),
        //     "email" => $this->faker->email(),

        // ];
    }
}
