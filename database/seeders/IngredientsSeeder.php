<?php

namespace Database\Seeders;

use App\Models\Ingredients;
use Illuminate\Database\Seeder;

class IngredientsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['name' => 'Carrot'],
            ['name' => 'Tomato'],
            ['name' => 'Onion'],
            ['name' => 'Peas'],
            ['name' => 'Potato'],
            ['name' => 'Cabbage'],
            ['name' => 'Broccoli'],
            ['name' => 'Spinach'],
            ['name' => 'Bell Pepper'],
            ['name' => 'Lettuce'],
            ['name' => 'Zucchini'],
            ['name' => 'Radish'],
            ['name' => 'Cauliflower'],
            ['name' => 'Eggplant'],
            ['name' => 'Green Bean'],
            ['name' => 'Mushroom'],
            ['name' => 'Celery'],
            ['name' => 'Pumpkin'],
            ['name' => 'Asparagus'],
            ['name' => 'Artichoke'],
            ['name' => 'Garlic'],
            ['name' => 'Ginger'],
            ['name' => 'Cilantro'],
            ['name' => 'Thyme'],
            ['name' => 'Rosemary'],
            ['name' => 'Basil'],
            ['name' => 'Oregano'],
            ['name' => 'Cumin'],
            ['name' => 'Coriander'],
            ['name' => 'Turmeric'],
            ['name' => 'Paprika'],
            ['name' => 'Cinnamon'],
            ['name' => 'Nutmeg'],
            ['name' => 'Cloves'],
            ['name' => 'Cardamom'],
            ['name' => 'Vanilla'],
            ['name' => 'Lemon'],
            ['name' => 'Lime'],
            ['name' => 'Orange'],
            ['name' => 'Apple'],
            ['name' => 'Banana'],
            ['name' => 'Strawberry'],
            ['name' => 'Blueberry'],
            ['name' => 'Raspberry'],
            ['name' => 'Blackberry'],
            ['name' => 'Grapes'],
            ['name' => 'Pineapple'],
            ['name' => 'Mango'],
            ['name' => 'Peach'],
            ['name' => 'Pear'],
            ['name' => 'Watermelon'],
        ];

        foreach ($ingredients as $ingredient) {
            if (Ingredients::where('name', $ingredient['name'])->doesntExist(
            )) {
                Ingredients::create($ingredient);
            }
        }
    }

}
