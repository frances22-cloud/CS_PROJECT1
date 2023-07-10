<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\comment;

class CategoryController extends Controller
{
    // category 1 function
    public function Cat1(){
    return view('RecipeCategories.recipe_cat1');
}
   // category 2 function
   public function Cat2(){
    return view('RecipeCategories.recipe_cat2');
}
 // category 3 function
 public function Cat3(){
    return view('RecipeCategories.recipe_cat3');
}
 // category 1 function
 public function Cat4(){
    return view('RecipeCategories.recipe_cat4');
}

// Function for view recipe cat1
   public function ViewCat1(){
   return view('RecipeCategories.view_recipe_cat1');
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
public function add_comment(Request $request)
{
if(Auth::id())
{
$comment=new comment();
$comment->name=Auth::user()->name;
$comment->user_id=Auth::user()->id;
$comment->comment=$request->comment;
$comment->save();
return redirect()->back()->with('message','comment added successfully');

}
else{
    return redirect('login');
}
}
}