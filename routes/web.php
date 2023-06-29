<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailingController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');

});
Route::controller(HomeController::class)->group(function(){
    Route::get('/userpage','Index');
 
    
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

Route::view('addRecipe', 'home/addrecipe');

require __DIR__.'/auth.php';
