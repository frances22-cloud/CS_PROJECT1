<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\comment;
use App\Models\reply;
use App\Models\addrecipe;
use App\Models\recipe_category;

class CategoryController extends Controller
{
    // category 1 function
    public function Cat1()
    {
        return view('RecipeCategories.recipe_cat1');
    }
    // category 2 function
    public function Cat2()
    {
        return view('RecipeCategories.recipe_cat2');
    }
    // category 3 function
    public function Cat3()
    {
        return view('RecipeCategories.recipe_cat3');
    }
    // category 1 function
    public function Cat4()
    {
        return view('RecipeCategories.recipe_cat4');
    }

    // Function for view recipe and comment section cat1
    public function ViewCat1()
    {
        $rcomment = comment::all();
        $reply = reply::all();
        return view('RecipeCategories.view_recipe_cat1', compact('rcomment'));
        return view('RecipeCategories.view_recipe_cat1', compact('reply', 'reply'));
    }
    public function ViewCat2()
    {
        return view('RecipeCategories.view_recipe_cat2');
    }
    public function View_recipe12()
    {
        return view('RecipeCategories.View_recipe12');
    }
    public function View_recipe22()
    {
        return view('RecipeCategories.View_recipe22');
    }
    public function View_recipe23()
    {
        return view('RecipeCategories.View_recipe23');
    }
    public function View_recipe21()
    {
        return view('RecipeCategories.View_recipe21');
    }
    public function View_recipe2c()
    {
        return view('RecipeCategories.View_recipe2c');
    }
    public function View_recipe2d()
    {
        return view('RecipeCategories.View_recipe2d');
    }
    public function View_recipe31()
    {
        return view('RecipeCategories.View_recipe31');
    }
    public function View_recipe32()
    {
        return view('RecipeCategories.View_recipe32');
    }
    public function View_recipe33()
    {
        return view('RecipeCategories.View_recipe33');
    }
    public function View_recipe34()
    {
        return view('RecipeCategories.View_recipe34');
    }
    public function addcomment(Request $request)
    {
        if (Auth::id()) {
            $rcomment = new comment();
            $rcomment->name = Auth::user()->name;
            $rcomment->user_id = Auth::user()->id;
            $rcomment->comment = $request->comment;
            $rcomment->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
    public function add_reply(Request $request)
    {
        if (Auth::id()) {
            $reply = new reply();
            $reply->name = Auth::user()->name;
            $reply->user_id = Auth::user()->id;
            $reply->comment_id = $request->commentId;
            $reply->reply = $request->reply;
            $reply->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
    //Function to add recipes to database
    public function useradd(Request $request)
    {
        $addrecipe = new addrecipe;
        $addrecipe->recipeName = $request->recipeName;
        $addrecipe->userName = $request->userName;
        $addrecipe->description = $request->description;
        $addrecipe->ingredients = $request->ingredients;
        $addrecipe->instructions = $request->instructions;
        $addrecipe->prepTime = $request->prepTime;
        $addrecipe->cookTime = $request->cookTime;
        $addrecipe->totalTime = $request->totalTime;
        $addrecipe->nutritional_fact = $request->nutritional_fact;
        $addrecipe->totalTime = $request->totalTime;

        $image = $request->image;

     if($image)
{
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('addrecipes',$imagename);
        $addrecipe->image= $imagename;
    }

     $addrecipe->save();
     return redirect()->back()->with('message','Recipe added succefully');
   }
  
//function to view add recipe form
public function useraddrecipe()
{
    return view('RecipeCategories.useraddrecipe');
}
   }
