<?php

namespace Database\Factories;

use App\Models\Dog;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->name(),
            "raza" => $this->faker->title(),
            "isVacunado" => $this->faker->boolean(),
            "fecha_nacimiento" => $this->faker->date(),
            // "edad" => $this->faker->randomDigit,
            "edad" => $this->faker->numberBetween(0, 16),
            "price" => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 300),
            "tamanyo" => $this->faker->randomElement(["little", "big"]),
            "descripcion" => $this->faker->realText($maxNbChars = 50),
        ];
    }
}
