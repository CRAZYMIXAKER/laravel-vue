<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Breakfast'],
            ['name' => 'Lunch'],
            ['name' => 'Dinner'],
            ['name' => 'Appetizers'],
            ['name' => 'Salads'],
            ['name' => 'Soups'],
            ['name' => 'Main Dishes'],
            ['name' => 'Side Dishes'],
            ['name' => 'Desserts'],
            ['name' => 'Bakery'],
            ['name' => 'Beverages'],
            ['name' => 'Snacks'],
            ['name' => 'Grilling'],
            ['name' => 'Vegetarian'],
            ['name' => 'Vegan'],
            ['name' => 'Gluten-Free'],
            ['name' => 'Dairy-Free'],
            ['name' => 'Low Carb'],
            ['name' => 'Keto'],
            ['name' => 'Paleo'],
            ['name' => 'International'],
            ['name' => 'Asian'],
            ['name' => 'Italian'],
            ['name' => 'Mexican'],
            ['name' => 'Mediterranean'],
            ['name' => 'Indian'],
            ['name' => 'Middle Eastern'],
            ['name' => 'Comfort Food'],
            ['name' => 'Holiday'],
            ['name' => 'Quick & Easy'],
            ['name' => 'One-Pot'],
            ['name' => 'Slow Cooker'],
            ['name' => 'Grains & Rice'],
            ['name' => 'Pasta'],
            ['name' => 'Pizza'],
            ['name' => 'Seafood'],
            ['name' => 'Poultry'],
            ['name' => 'Beef'],
            ['name' => 'Pork'],
            ['name' => 'Lamb'],
            ['name' => 'Vegetables'],
            ['name' => 'Fruits'],
        ];

        foreach ($categories as $category) {
            if (Category::where('name', $category['name'])->doesntExist()) {
                Category::create($category);
            }
        }
    }

}
