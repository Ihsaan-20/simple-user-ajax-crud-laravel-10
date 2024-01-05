<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $postCategories = [
            'Technology',
            'Science',
            'Travel',
            'Food',
            'Fashion',
            // Add more categories as needed
        ];

        for ($i = 0; $i <= 20; $i++) {
            Product::create([
                'title' => 'Dummy Title ' . $i,
                'description' => 'Dummy description ' . $i,
                'category' => $postCategories[$i % count($postCategories)], // Use modulus to loop through categories
            ]);
        }
    }

}
