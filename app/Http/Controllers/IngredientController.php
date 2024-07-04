<?php

namespace App\Http\Controllers;

use App\Http\Requests\Ingredients\SaveIngredient;
use App\Http\Services\IngredientService;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{

    protected $ingredientService;

    public function __construct(IngredientService $ingredientService)
    {
        $this->ingredientService = $ingredientService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ingredients = $this->ingredientService->getIngredients($request);
        return view('ingredients.index')->with('ingredients', $ingredients);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        info('ER');
        return view('ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveIngredient $request)
    {
        info ($request);

    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ingredient $ingredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredient $ingredient)
    {
        //
    }
}
