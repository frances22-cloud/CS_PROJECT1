<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function View_category(){
        return view('admin.recipe_category');
     }
}
