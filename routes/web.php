<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaveCafe;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\CategoryController;
use App\Http\Controllers\Auth\BeverageController;
use App\Http\Controllers\Auth\MassageController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Route::get('/users', [UserController::class, 'index'])->name('users');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

/////////
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

////////
Route::get('/beverages', [BeverageController::class, 'index'])->name('beverages.index');
Route::get('/beverages/create', [BeverageController::class, 'create'])->name('beverages.create');
Route::post('/beverages', [BeverageController::class, 'store'])->name('beverages.store');
Route::get('/beverages/{id}/edit', [BeverageController::class, 'edit'])->name('beverages.edit');
Route::get('/beverages/{id}', [BeverageController::class, 'show'])->name('beverages.show');
Route::delete('/beverages/{id}', [BeverageController::class, 'destroy'])->name('beverages.destroy');

///////
//Route::get('/massages', [MassageController::class, 'index'])->name('massages.index');

//////
Route::get('/', [WaveCafe::class, 'home'])->name('home');
Route::get('/drinkMenu', [WaveCafe::class, 'drinkMenu'])->name('drinkMenu');

Route::prefix('drink')->group(function () {
    Route::get('/cold', [DrinkController::class, 'cold'])->name('drink.cold');
    Route::get('/hot', [DrinkController::class, 'hot'])->name('drink.hot');
    Route::get('/juice', [DrinkController::class, 'juice'])->name('drink.juice');
});

Route::get('/aboutUs', [WaveCafe::class, 'aboutUs'])->name('aboutUs');
Route::get('/specialItems', [WaveCafe::class, 'specialItems'])->name('specialItems');
Route::get('/contact', [WaveCafe::class, 'contact'])->name('contact');



//
//Route::get('drinkMenu',[WaveCafe::class,'drinkMenu'])->name('drinkMenu');

//Route::get('cold',[WaveCafe::class,'cold'])->name('drink/cold');
//Route::get('hot',[WaveCafe::class,'hot'])->name('drink/hot');
//Route::get('juice',[WaveCafe::class,'juice'])->name('drink/juice');
//Route::get('aboutUs', [WaveCafe::class, 'aboutUs'])->name('aboutUs');
//Route::get('specialItems', [WaveCafe::class, 'specialItems'])->name('specialItems');
//Route::get('contact',[WaveCafe::class,'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
