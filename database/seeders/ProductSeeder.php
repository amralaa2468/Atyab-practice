<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryIds = Category::pluck('id')->toArray();
        $totalProducts = 1000;

        for ($i = 0; $i < $totalProducts; $i++) {
            $categoryId = $categoryIds[array_rand($categoryIds)];

            Product::factory()->create([
                'category_id' => $categoryId,
            ]);
        }
    }
}
