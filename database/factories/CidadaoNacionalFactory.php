<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CidadaoNacionalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome" => $this->faker->unique()->word,
            "numero_bi" => $this->faker->numberBetween(1,100),
            "data_nascimento" => $this->faker->date,
            "naturalidade" => $this->faker->word,
            "nome_pai" => $this->faker->word,
            "nome_mae" => $this->faker->word,
            "data_emissao" => $this->faker->date,
            "data_validade" => $this->faker->date,
            'sexo' => $this->faker->randomElement(["M", "F"]),
            "estado_civil" => $this->faker->word,
            'altura' => $this->faker->randomFloat(2,1,3),
            "residencia" => $this->faker->word,
            "provincia" => $this->faker->word
        ];
    }
}
