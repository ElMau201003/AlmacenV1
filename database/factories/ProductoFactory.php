<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombreProducto' => $this->faker->word,
            'marcaProducto' => $this->faker->word,
            'loteProducto' => $this->faker->word,
            'cantidadTotalProducto' => $this->faker->numberBetween(1, 1000000),
        ];
    }
}
