<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailingController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('welcome');

});

Route::controller(HomeController::class)->group(function(){
    Route::get('/userpage','Index');
    Route::get('/recipes','Recipe');
    Route::get('/addrecipe', 'AddRecipe');

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/homepage', 'Index');
    Route::get('/userpage', 'userIndex');
    Route::get('/recipes', 'Recipe');
    Route::get('/addrecipe', 'addRecipe');
});
>>>>>>> cfebb4fcd2bf6db133d82915c7fc912021090ba9

Route::controller(AdminController::class)->group(function () {
    Route::get('/recipe_category', 'View_category');
});



Route::get('/',[HomeController::class,'Index']);


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
Route::get('/redirect', [HomeController::class, 'redirect']);


Route::get('logout', [HomeController::class, 'perform']);


Route::post('addrecipe', [RecipeController::class, 'store']);

/*Route::middleware('recipes')->group(function () {
    Route::get('addrecipe', [RecipeController::class, 'create'])
                ->name('addrecipe');

    Route::post('addrecipe', [RecipeController::class, 'store']);
});*/


require __DIR__.'/auth.php';
