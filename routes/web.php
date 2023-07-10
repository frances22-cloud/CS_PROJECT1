<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailingController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;


Route::controller(HomeController::class)->group(function(){
    Route::get('/userpage','Index');
    Route::get('/recipes','Recipe');
    Route::get('/addrecipe', 'AddRecipe');
    Route::get('/about', 'About');
    Route::get('/contact', 'Contact');

});
Route::controller(AdminController::class)->group(function(){
    Route::get('/recipe_category','View_category');
    Route::post('/add_category','add_category');
    Route::get('/delete_category/{id}','delete_category');
    Route::get('/view_recipe','view_recipe');
    Route::post('/add_recipe','add_recipe');
    Route::get('/show_recipe','show_recipe');
    Route::get('/delete_recipe/{id}','delete_recipe');
    Route::get('/update_recipe/{id}','update_recipe');
    Route::post('/update_recipe_confirm/{id}','update_recipe_confirm');

});
Route::get('/',[HomeController::class,'Index']);
Route::get('/redirect', [HomeController::class, 'redirect']);


//admin
Route::prefix('admin')->middleware('auth')->group(function(){


});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('emails')->group(function (){
 Route::post('reset-password',[EmailingController::class,'resetPassword'])->name('password.email');
});

//Recipe Category Route
Route::controller(CategoryController::class)->group(function(){
    Route::get('/recipe_cat1','Cat1');
    Route::get('/recipe_cat2','Cat2');
    Route::get('/recipe_cat3','Cat3');
    Route::get('/recipe_cat4','Cat4');
    //Controller to return view recipes
    Route::get('/view_recipe_cat1','ViewCat1');
    Route::get('/view_recipe_cat2','ViewCat2');
    Route::get('/view_recipe12','View_recipe12');
    Route::get('/view_recipe22','View_recipe22');
    Route::get('/view_recipe23','View_recipe23');
    Route::get('/view_recipe21','View_recipe21');
    Route::get('/view_recipe2c','View_recipe2c');
    Route::get('/view_recipe2d','View_recipe2d');
    Route::get('/view_recipe31','View_recipe31');
    Route::get('/view_recipe32','View_recipe32');
    Route::get('/view_recipe33','View_recipe33');
    Route::get('/view_recipe34','View_recipe34');
    Route::post('/add_comment','add_comment');
    
});



require __DIR__.'/auth.php';
