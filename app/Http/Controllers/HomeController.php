<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\tbl_recipes;
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

   public function AddRecipe(){
      return view('home.addrecipe');
     }
     public function About(){
      return view('home.about');
     }
     public function Contact(){
      return view('home.contact');
     }

   public function redirect(){

      $usertype=Auth::user()->usertype;
      if($usertype=='1'){
         return view('admin.home');
      }else
      {
         return view('home.recipes');
      }
   }
}
