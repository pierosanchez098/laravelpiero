<?php

namespace Database\Factories;


use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pokemon>
 */
class PokemonFactory extends Factory
{
    protected $model = Pokemon::class;

    private $nombresPokemon = [
        'Bagon', 'Corphish', 'Shinx', 'Snover',
        'Litwick', 'Axew', 'Deino', 'Hawlucha',
        'Phantump', 'Bergmite', 'Klefki', 'Komala',
        'Oranguru', 'Passimian', 'Wimpod', 'Salandit',
    ];

    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement($this->nombresPokemon),
            'tipo' => $this->faker->randomElement(['agua', 'fuego', 'planta', 'hada']),
            'tamaño' => $this->faker->randomElement(['grande', 'mediano', 'pequeño']),
            'peso' => $this->faker->randomFloat(2, 0.1, 100),
        ];
    }
}
