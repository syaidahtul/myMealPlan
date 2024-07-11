<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\recipes;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    
    public function index()
    {
        return view('recipes.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'src_name' => 'required|string|max:255',
            'src_url' => 'nullable|url',
        ]);

        // Use firstOrCreate to find or create the recipe
        $recipe = Recipe::firstOrCreate(
            ['name' => $request->input('name')],
            ['src_name' => $request->input('src_name'), 'src_url' => $request->input('src_url')]
        );

        // Optionally, you can flash a message or redirect
        return redirect()->route('recipes.index')->with('success', 'Recipe created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipes)
    {
        //
    }
}
