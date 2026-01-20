<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Thing;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Thing>
 */
class ThingFactory extends Factory
{
    protected $model = Thing::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $names = [
            '«Мастер и Маргарита»',
            '«Преступление и наказание»',
            '«Война и мир»',
            '«Три товарища»',
            '«Гарри Поттер и философский камень»',
            '«1984»',
            '«Убить пересмешника»',
            '«Маленький принц»',
            '«Алиса в Стране чудес»',
            '«О дивный новый мир»',
        ];

        $descriptions = [
            'Классический роман с элементами мистики и сатиры',
            'Психологический роман о вине и возмездии',
            'Эпопея о судьбах людей на фоне войны',
            'История дружбы и утрат в послевоенной Европе',
            'Фэнтези о мире магии и взрослении',
            'Антиутопия о тоталитарном обществе',
            'Роман о расизме и справедливости в маленьком городке',
            'Философская сказка о смысле жизни и ответственности',
            'Сказочная повесть о путешествиях в фантастические миры',
            'Антиутопия о будущем, где счастье — обязательная норма',
        ];

        return [
            'name' => $this->faker->randomElement($names),
            'description' => [
                'variants' => $descriptions,
                'current' => $this->faker->randomElement($descriptions)
            ],
            'wrnt' => $this->faker->date('Y-m-d', '+1 year'),
            'master_id' => User::inRandomOrder()->first()->id,
            'amount' => $this->faker->numberBetween(1, 100)
        ];
    }
}
