<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom" => $this->faker->name,
            "prix" => $this->faker->randomElement([120,150,120,50]),
            "quantite" => $this->faker->randomElement([20,10,30,50]),
            "user_id" => User::get('id')->random()->id,
        ];
    }
}
