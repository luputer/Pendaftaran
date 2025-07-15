<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\guru;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        guru::factory()->count(40)->create();
    }
}
