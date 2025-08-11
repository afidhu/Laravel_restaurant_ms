<?php

use App\Http\Controllers\AddCartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('foods', FoodController::class);

// Route::get('/foods', [FoodController::class,'AdminDashboard'])->name('foods');
// Route::get('/foods-form', [FoodController::class,'FoodForm'])->name('foodform');



// Route::get('/seach', [AdminController::class,'searchFood'])->name('search');




Route::resource('cartview', AddCartController::class);


Route::get('/oders', [OrdersController::class,'ShowOrders'])->name('orders');



Route::get('/pays', [PaymentController::class,'Mkepayment'])->name('payment');
Route::post('/pays-oder', [PaymentController::class,'MakeOrder'])->name('order');


Route::get('/search', [AdminController::class,'SearchFood'])->name('search');


Route::get('/', [HomeController::class,'Homepage'])->name('home');
Route::get('/users', [UserController::class,'UsersPage'])->name('userspage');
Route::get('/user-delete/{id}', [UserController::class,'DeleteUser'])->name('deleteuser');


Route::get('/redirects', [HomeController::class,'RedirectPage'])->name('redirects');
Route::post('/add-cart/{id}', [HomeController::class,'AddToCart'])->name('addtocart');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
