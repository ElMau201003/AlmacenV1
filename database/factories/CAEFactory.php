<?php


namespace Database\Factories;

use App\Models\CAE;
use Illuminate\Database\Eloquent\Factories\Factory;

class CAEFactory extends Factory
{
    protected $model = CAE::class;

    public function definition()
    {
        return [
            'dniCAE' => $this->faker->numberBetween(10000000, 99999999), 
            'nombresCAE' => $this->faker->name, 
            'apellidopCAE'=> $this->faker->lastName,
            'apellidomCAE'=> $this->faker->lastName, 
            'telefonoCAE'=> $this->faker->phoneNumber, 
            'cargoCAE'=> $this->faker->randomElement(['Director/a', 'Docente', 'PPFF']),
        ];
    }
}

