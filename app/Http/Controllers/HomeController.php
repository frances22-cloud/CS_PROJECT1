<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function Index()
   {
      return view('home.homepage');
   }
   public function userIndex()
   {
      return view('home.userpage');
   }
   public function Recipe()
   {
      return view('home.recipes');
   }

<<<<<<< HEAD
   public function AddRecipe(){
      return view('home.addrecipe');
     }

   public function redirect(){

      $usertype=Auth::user()->usertype;
      if($usertype=='1'){
=======
   public function addRecipe()
   {
      return view('home.addrecipe');
   }

   public function redirect()
   {

      $usertype = Auth::user()->usertype;
      if ($usertype == '1') {
>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9
         return view('admin.home');
      } else {
         return view('dashboard');
      }
   }

   public function perform()
    {
        Auth::logout();

        return redirect('/homepage');
    }

}
