<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CategoryRecipe;
use App\Models\IngredientRecipe;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CategorySeeder::class);
        $this->call(IngredientsSeeder::class);

        User::factory(10)->create();
        Recipe::factory(50)->create();
        CategoryRecipe::factory(50)->create();
        IngredientRecipe::factory(300)->create();
    }

}
