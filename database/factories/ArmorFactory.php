<?php

namespace Database\Factories;

use App\Models\Armor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArmorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Armor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName() . 'の鎧',
            'created_at' => now(),
            'updated_at' => $this->faker->dateTimeBetween('0days', '10days'),
        ];
    }
}
