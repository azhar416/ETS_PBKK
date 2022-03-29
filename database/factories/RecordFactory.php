<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
            'record_name' => $this->faker->title(),
            'patient_id' => mt_rand(1, 2),
            'doctor_id' => mt_rand(1, 2),
            'kondisi' => $this->faker->sentence(mt_rand(1,5)),
            'suhu_tubuh' => $this->faker->randomFloat(1, 35, 45.5),
        ];
    }
}
