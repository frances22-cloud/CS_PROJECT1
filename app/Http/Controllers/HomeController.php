<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tbl_recipes;
use App\Models\recipe_category;


use Illuminate\Support\Facades\Auth;

class HomeController extends Controller

{
   public function Index(){
     
    return view('home.userpage');
   }
   
   public function Recipe(){
      $tbl_recipes=tbl_recipes::all();
    return view ('home.recipes', compact('tbl_recipes'));
    }

   // public function AddRecipe(){
   //    return view('home.addrecipe');
   //   }
     public function About(){
      return view('home.about');
     }
     public function Contact(){
      return view('home.contact');
     }

   public function redirect(){

      $usertype=Auth::user()->usertype;
      if($usertype=='1')
      {

         // $total_recipes=tbl_recipes::all()->Count();
         // $total_users=User::all()->Count();
         // $total_categories=recipe_category::all()->count();
         // // $total_comments=comment::all()->count();
         // // $total_favourites=favourites::all()->count();
         // // $added_recipes=addrecipe::all()->count();
       
         return view('admin.home');
      }
      else if ($usertype=='0')
      {
         return view('dashboard');
      }
      else
      {
         return redirect ()->back();
      }
   }

   public function perform()
    {
        Auth::logout();

        return redirect('userpage');
    }
    //search recipes section
   public function searchRecipes(){
      return view('home.more');
    }
}
