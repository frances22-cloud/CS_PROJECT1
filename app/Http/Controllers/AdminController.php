<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\recipe_category;
use App\Models\tbl_recipes;
use App\Models\User;
use App\Models\Forum_topics;

class AdminController extends Controller
{
    public function View_category(){
        $data=recipe_category::all();
        return view('admin.recipe_category',compact('data'));
     }
     public function add_category(Request $request)
     {
        $data=new recipe_category;
        $data->category_name=$request->recipe_category;
        $data->save();
        return redirect()->back()->with('message','Category added successfully');
     }
     public function delete_category($id){

        $data=recipe_category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category deleted successfully');
     }
    //View recipe category function
    public function view_recipe(){
        $recipe_category=recipe_category::all();
        return view('admin.recipes',compact('recipe_category'));
    }
    //function to add recipe to database by admin
    public function add_recipe(Request $request){
        $tbl_recipes= new tbl_recipes;
        $tbl_recipes->title=$request->title;
        $tbl_recipes->description=$request->description;
        $tbl_recipes->category=$request->category;
        $tbl_recipes->ingredients=$request->ingredients;
        $tbl_recipes->prep_instructions=$request->prep_instructions;
        $tbl_recipes->prep_time=$request->prep_time;
        $tbl_recipes->Nutritional_info=$request->Nutritional_info;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('tbl_recipes',$imagename);
        $tbl_recipes->image= $imagename;

        $tbl_recipes->save();
        return redirect()->back()->with('message','Recipe added succefully');
      
    }
    //function to show recipes in a table
    public function show_recipe()
    {
        $tbl_recipes=tbl_recipes::all();
        return view('admin.show_recipe',compact('tbl_recipes'));
    }
    //function to delete recipes
    public function delete_recipe($id)
    {
        $tbl_recipes=tbl_recipes::find($id);
        $tbl_recipes->delete();
        return redirect()->back()->with('message','Recipe deleted succefully'); 
    }
    //function to update recipes
    public function update_recipe($id)
    {
        $tbl_recipes=tbl_recipes::find($id);
        $recipe_category=recipe_category::all();
        return view ('admin.update_recipe', compact('tbl_recipes', 'recipe_category'));
    }
    //update recipe confirmation
    public function update_recipe_confirm(Request $request, $id)
    {

        $tbl_recipes=tbl_recipes::find($id);  
        $tbl_recipes->title=$request->title;
        $tbl_recipes->description=$request->description;
        $tbl_recipes->category=$request->category;
        $tbl_recipes->ingredients=$request->ingredients;
        $tbl_recipes->prep_instructions=$request->prep_instructions;
        $tbl_recipes->prep_time=$request->prep_time;
        $tbl_recipes->Nutritional_info=$request->Nutritional_info;

        $image=$request->image;
     if($image)
{
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('tbl_recipes',$imagename);
        $tbl_recipes->image= $imagename;
    }

        $tbl_recipes->save();
        return redirect()->back()->with('message','Recipe updated succefully');
      
    }
    public function showuser()
    {
        $users = User::all();
        return view('admin.userdata', compact('users'));
    }
    public function ForumTopics()
    {
        $data=Forum_topics::all();
        return view('admin.forum_topics',compact('data'));
    }

    public function perform() //admin logout
    {
        //Auth::logout();

        return redirect('userpage');
    }
}
