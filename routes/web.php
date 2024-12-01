<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//importamos controladores
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CatecoryController;
use App\Http\Controllers\Income_detailController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\Sale_detailController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\RoleController;

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

    //rutas de nuestra app
    Route::resource('/dashboard/article', ArticleController::class);
    Route::resource('/dashboard/category', CatecoryController::class);
    Route::resource('/dashboard/person', PersonController::class);
    Route::resource('/dashboard/income', IncomeController::class);
    Route::resource('role', RoleController::class);
});

require __DIR__.'/auth.php';


    //rutas de nuestra app
    //Route::resource('/dashboard/article', ArticleController::class);
    //Route::resource('/dashboard/category',CatecoryController::class);
    //Route::resource('/dashboard/Article',Income_detailController::class);
    //Route::resource('/dashboard/Article',IncomeController::class);
    //Route::resource('/dashboard/person',PersonController::class);
    //Route::resource('/dashboard/Article',Sale_detailController::class);
    //Route::resource('/dashboard/Article',SaleController::class);
