<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Videoclub;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Videoclub>
 */
class VideoclubFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombrePelicula'=fake()->name()->create(3);
            'descripcion'=fake()->name()->create(3);
            'categoria' =fake()->name()->create(3);
            'Actores'= fake()->name()->create(3);
        ];
    }
}