<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'kelas' => $this->faker->randomElement(['10A', '11B', '12C']),
            'nilai' => $this->faker->numberBetween(0, 100),
            'image' => $this->faker->imageUrl(200, 200, 'people', true, 'student'),
        ];
    }
}
