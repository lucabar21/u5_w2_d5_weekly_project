<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('products')->insert([
                'name' => fake()->word(),
                'price' => rand(100, 350),
                'description' => fake()->words(rand(3, 8), true),
                'img' => 'https://picsum.photos/640/480'
            ]);
        }
    }
}
