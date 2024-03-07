<?php

use App\Http\Controllers\API\BillController;
use App\Http\Controllers\API\DietController;
use App\Http\Controllers\API\FlagController;
use App\Http\Controllers\API\FoodAllergenController;
use App\Http\Controllers\API\ProductBillController;
use App\Models\FoodAllergen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bills', [BillController::class, 'index'])->name('bills.index');
Route::post('/bills', [BillController::class, 'store'])->name('bills.store');
Route::get('/bills/{bill}', [BillController::class, 'show'])->name('bills.show');
Route::put('/bills/{bill}', [BillController::class, 'update'])->name('bills.update');
Route::delete('/bills/{bill}', [BillController::class, 'destroy'])->name('bills.destroy');

Route::get('/diets', [DietController::class, 'index'])->name('diets.index');
Route::post('/diets', [DietController::class, 'store'])->name('diets.store');
Route::get('/diets/{diet}', [DietController::class, 'show'])->name('diets.show');
Route::put('/diets/{diet}', [DietController::class, 'update'])->name('diets.update');
Route::delete('/diets/{diet}', [DietController::class, 'destroy'])->name('diets.destroy');


Route::get('/flags', [FlagController::class, 'index'])->name('flags.index');
Route::post('/flags', [FlagController::class, 'store'])->name('flags.store');
Route::get('/flags/{flag}', [FlagController::class, 'show'])->name('flags.show');
Route::put('/flags/{flag}', [FlagController::class, 'update'])->name('flags.update');
Route::delete('/flags/{flag}', [FlagController::class, 'destroy'])->name('flags.destroy');

Route::get('/foodallergens', [FoodAllergenController::class, 'index'])->name('foodallergens.index');
Route::post('/foodallergens', [FoodAllergenController::class, 'store'])->name('foodallergens.store');
Route::get('/foodallergens/{flag}', [FoodAllergenController::class, 'show'])->name('foodallergens.show');
Route::put('/foodallergens/{flag}', [FoodAllergenController::class, 'update'])->name('foodallergens.update');
Route::delete('/foodallergens/{flag}', [FoodAllergenController::class, 'destroy'])->name('foodallergens.destroy');


Route::get('/productbill', [ProductBillController::class, 'index'])->name('productbill.index');
Route::post('/productbill', [ProductBillController::class, 'store'])->name('productbill.store');
Route::get('/productbill/{flag}', [ProductBillController::class, 'show'])->name('productbill.show');
Route::put('/productbill/{flag}', [ProductBillController::class, 'update'])->name('productbill.update');
Route::delete('/productbill/{flag}', [ProductBillController::class, 'destroy'])->name('productbill.destroy');
