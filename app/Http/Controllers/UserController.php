<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function create(): View
    {
        return view('addrecipe');
    }

}
