<?php

namespace Database\Factories;

use App\Models\Ingredients;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\IngredientRecipe>
 */
class IngredientRecipeFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ingredient_id' => Ingredients::inRandomOrder()->value('id'),
            'recipe_id' => Recipe::inRandomOrder()->value('id'),
        ];
    }

}
