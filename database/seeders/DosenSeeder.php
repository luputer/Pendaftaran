<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert([
            'name' => 'John Doe',
            'email' => '6oEw2@example.com',
            'password' => bcrypt('password'),
            'address' => 'Jalan Raya, Kota Bandung',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
