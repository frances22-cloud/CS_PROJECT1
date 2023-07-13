<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\addrecipe;

class RecipeController extends Controller
{
    //Function to add recipes to database
    public function useradd(Request $request)
    {
      $addrecipe=new addrecipe;
      $addrecipe->recipeName=$request->recipeName;
      $addrecipe->userName=$request->userName;
      $addrecipe->description=$request->description;
      $addrecipe->ingredients=$request->ingredients;
      $addrecipe->instructions=$request->instructions;
      $addrecipe->prepTime=$request->prepTime;
      $addrecipe->cookTime=$request->cookTime;
      $addrecipe->totalTime=$request->totalTime;
      $addrecipe->nutritional_fact=$request->nutritional_fact;
      $addrecipe->totalTime=$request->totalTime;
      $image=$request->image;

      if($image)
 {
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->image->move('addrecipes',$imagename);
         $tbl_recipes->image= $imagename;
     }

      $addrecipe->save();
      return redirect()->back();
      //return view('home.useraddrecipe');
    }
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
