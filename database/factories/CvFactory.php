<?php

namespace Database\Factories;
use App\Models\User;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\Factory;

class CvFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cv::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "titre" => $this->faker->name,
            "competence" => $this->faker->name,
            "langue" => $this->faker->name,
            "user_id" => User::get('id')->random()->id,

        ];
    }
}
