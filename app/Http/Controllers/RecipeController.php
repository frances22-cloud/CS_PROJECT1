<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
 
    public function Recipe(){
        return view ('dashboard');
    }
    public function favourites(Request $request, Recipe $view_recipe_cat1)
    {
        $user = Auth::user();
        $user->favourites()->attach($view_recipe_cat1);

        return response()->json(['success' => true]);
    }
}
