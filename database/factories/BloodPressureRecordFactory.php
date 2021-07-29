<?php

namespace Database\Factories;

use App\Models\BloodPressureRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class BloodPressureRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BloodPressureRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeBetween('-1 year')->format('Y-m-d'),
            'systolic' => $this->faker->numberBetween(60, 150),
            'diastolic' => $this->faker->numberBetween(30, 110),
            'pulse' => $this->faker->numberBetween(30, 130),
            'observations' => $this->faker->boolean(75) ? $this->faker->text(50) : null,
        ];
    }
}
