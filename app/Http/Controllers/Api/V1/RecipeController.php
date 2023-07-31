<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class RecipeController extends Controller
{

    public function index()
    {
        $recipes = Recipe::all();

        return response()->json($recipes);
    }

}
