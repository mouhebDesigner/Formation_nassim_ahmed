<?php

namespace Database\Factories;

use App\Models\Cour;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            "user_id" => User::get('id')->random()->id,

        ];
    }
}
