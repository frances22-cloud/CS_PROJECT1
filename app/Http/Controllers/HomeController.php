<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function Index(){
    return view('home.userpage');
   }
   public function Recipe(){
   return view ('home.recipes');
}

   public function addRecipe(){
      return view('addrecipe');
     }


   public function redirect(){

      $usertype=Auth::user()->usertype;
      if($usertype=='1'){
         return view('admin.home');
      }else
      {
         return view('dashboard');
      }
   }
}
