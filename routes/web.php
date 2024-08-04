<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//Importamos los controladores
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Income_DetailController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\Sale_DetailController;
use App\Http\Controllers\SaleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//Rutas de nuestra app
    Route::resource('/dashboard/Article',ArticleController::class);
    Route::resource('/dashboard/Category',CategoryController::class);
    //Route::resource('/dashboard/Income_Detail',Income_DetailController::class);
    //Route::resource('/dashboard/Income',IncomeController::class);
    Route::resource('/dashboard/Person',PersonController::class);
    //Route::resource('/dashboard/Sale_Detail',Sale_DetailController::class);
    //Route::resource('/dashboard/Sale',SaleController::class);
});



require __DIR__.'/auth.php';
