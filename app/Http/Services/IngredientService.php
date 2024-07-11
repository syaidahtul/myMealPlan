<?php

namespace App\Http\Services;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientService {

    public function getIngredients(Request $request){
        $ingredients = Ingredient::get();
        return $ingredients;
    }

    public function saveIngredient(Request $request){
        $ingredeientSaved = Ingredient::create($request);
        return $ingredeientSaved;
    }
}