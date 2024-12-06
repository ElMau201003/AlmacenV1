<?php

namespace Database\Factories;

use App\Models\Referenciador;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReferenciadorFactory extends Factory
{
    protected $model = Referenciador::class;

    public function definition()
    {
        return [
            'nombresReferenciador' => $this->faker->name,
            'apellidopReferenciador' => $this->faker->lastName,
            'apellidomReferenciador' => $this->faker->lastName,
            'telefonoReferenciador' => $this->faker->phoneNumber,
            'carnetsanidadReferenciador' => $this->faker->bothify('??#####'),
        ];
    }
}
