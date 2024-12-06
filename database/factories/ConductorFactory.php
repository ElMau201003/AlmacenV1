<?php

namespace Database\Factories;

use App\Models\Conductor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConductorFactory extends Factory
{
    protected $model = Conductor::class;

    public function definition()
    {
        return [
            'nombresConductor' => $this->faker->name,
            'apellidopConductor' => $this->faker->lastName,
            'apellidomConductor' => $this->faker->lastName,  
            'telefonoConductor'=> $this->faker->phoneNumber, 
            'licenciaConductor'=> $this->faker->bothify('??#####'),

        ];
    }
}

