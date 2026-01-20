<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Place;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PlaceFactory extends Factory
{
    protected $model = Place::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            'Главный читальный зал',
            'Детский уголок',
            'Архив редких изданий'
        ];

        $descriptions = [
            'Основное пространство для чтения и работы с книгами',
            'Зона с книгами и играми для детей',
            'Помещение для хранения старых и редких книг'
        ];

        return [
            'name' => $this->faker->randomElement($names),
            'description' => $this->faker->randomElement($descriptions),
            'repair' => $this->faker->boolean(20),
            'work' => $this->faker->boolean(70),
        ];
    }
}
