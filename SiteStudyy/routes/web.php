<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\SportsController;
use App\Http\Controllers\TehnologyController;



Route::get('/', function () {
    return view('index');
});

//Route food
Route::get('Form/Food', [FoodController::class, 'index_Form'])->name('Form-Food');
Route::post('/upload/information',[FoodController::class,'Upload'])->name('view-Food');

//Route sports
Route::get('Form/Sports', [SportsController::class, 'indexForm'])->name('Form-Sports');
Route::post('Form/Sports', [SportsController::class, 'AddDeporte'])->name('Agregar-Sports');



//Route Tehnology
Route::get('Form/Tehnology',[TehnologyController::class, 'indexForm'])->name('Form-Tehnology');
Route::post('Form/Tehnology',[TehnologyController::class, 'AddTehnology'])->name('Add-Tecnology');

