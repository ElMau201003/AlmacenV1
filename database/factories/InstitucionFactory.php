<?php

namespace Database\Factories;

use App\Models\Institucion;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstitucionFactory extends Factory
{
    protected $model = Institucion::class;

    public function definition()
    {
        return [
            'codigoInstitucion' => $this->faker->unique()->numberBetween(1000, 9999),
            'nombreInstitucion' => $this->faker->company,
            'nivelInstitucion' => $this->faker->randomElement(['Inicial', 'Primaria', 'Secundaria']),
            'direccionInstitucion' => $this->faker->address,
            'localidadInstitucion' => $this->faker->city,
            'distritoInstitucion' => $this->faker->state,
            'provinciaInstitucion' => $this->faker->state,
            'departamentoInstitucion' => $this->faker->state,
        ];
    }
}
