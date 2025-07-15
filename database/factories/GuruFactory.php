<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class GuruFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama'   => $this->faker->name(),
            'email'  => $this->faker->unique()->safeEmail(),
            'alamat' => $this->faker->address(),
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            
        ];
    }
}
