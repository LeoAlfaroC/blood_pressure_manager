<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthday' => $this->faker->date('Y-m-d', '2005-12-31'),
            'medical_history' => $this->faker->boolean(75) ? $this->faker->text('150') : null,
            'allergies' => $this->faker->boolean(75) ?  $this->faker->text('150') : null,
            'family_background' => $this->faker->boolean(75) ? $this->faker->text('150') : null,
        ];
    }
}
