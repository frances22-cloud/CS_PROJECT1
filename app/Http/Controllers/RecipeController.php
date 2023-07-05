<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'preptime' => 'required',
            'cooktime' => 'required',
            'difficulty' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        Recipe::create([
            'title' => $request->title,
            'preptime' => $request->preptime,
            'cooktime' => $request->cooktime,
            'difficulty' => $request->difficulty,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'instructions' => $request->instructions,
        ]);

        return redirect()->route('home.addrecipe')
            ->with('success', 'Recipe created successfully.');
    }
}