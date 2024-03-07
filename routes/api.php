<?php

use App\Http\Controllers\API\BillController;
use App\Http\Controllers\API\DietController;
use App\Http\Controllers\API\FlagController;
use App\Http\Controllers\API\FoodAllergenController;
use App\Http\Controllers\API\ProductBillController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\UserController;
use App\Models\Diet;
use App\Models\FoodAllergen;
use App\Models\ProductBill;
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
Route::get('/bills/create', [BillController::class, 'create'])->name('bills.create');
Route::get('/bills/{bill}', [BillController::class, 'show'])->name('bills.show');
Route::get('/bills/{bill}/edit', [BillController::class, 'edit'])->name('bills.edit');
Route::put('/bills/{bill}', [BillController::class, 'update'])->name('bills.update');
Route::delete('/bills/{bill}', [BillController::class, 'destroy'])->name('bills.destroy');



Route::get('/diets', [DietController::class, 'index'])->name('diets.index');
Route::post('/diets', [DietController::class, 'store'])->name('diets.store');
Route::get('/diets/create', [DietController::class, 'create'])->name('diets.create');
Route::get('/diets/{diet}', [DietController::class, 'show'])->name('diets.show');
Route::get('/diets/{diet}/edit', [DietController::class, 'edit'])->name('diets.edit');
Route::put('/diets/{diet}', [DietController::class, 'update'])->name('diets.update');
Route::delete('/diets/{diet}', [DietController::class, 'destroy'])->name('diets.destroy');


Route::get('/flags', [FlagController::class, 'index'])->name('flags.index');
Route::post('/flags', [FlagController::class, 'store'])->name('flags.store');
Route::get('/flags/create', [FlagController::class, 'create'])->name('flags.create');
Route::get('/flags/{flag}', [FlagController::class, 'show'])->name('flags.show');
Route::get('/flags/{diet}/edit', [FlagController::class, 'edit'])->name('flags.edit');
Route::put('/flags/{flag}', [FlagController::class, 'update'])->name('flags.update');
Route::delete('/flags/{flag}', [FlagController::class, 'destroy'])->name('flags.destroy');

Route::get('/foodallergens', [FoodAllergenController::class, 'index'])->name('foodallergens.index');
Route::post('/foodallergens', [FoodAllergenController::class, 'store'])->name('foodallergens.store');
Route::get('/foodallergens/create', [FoodAllergenController::class, 'create'])->name('foodallergens.create');
Route::get('/foodallergens/{foodallergen}', [FoodAllergenController::class, 'show'])->name('foodallergens.show');
Route::get('/foodallergens/{foodallergen}/edit', [FoodAllergenController::class, 'edit'])->name('foodallergens.edit');
Route::put('/foodallergens/{foodallergen}', [FoodAllergenController::class, 'update'])->name('foodallergens.update');
Route::delete('/foodallergens/{foodallergen}', [FoodAllergenController::class, 'destroy'])->name('foodallergens.destroy');


Route::get('/productbill', [ProductBillController::class, 'index'])->name('productbill.index');
Route::post('/productbill', [ProductBillController::class, 'store'])->name('productbill.store');
Route::get('/productbill/create', [ProductBillController::class, 'create'])->name('productbill.create');
Route::get('/productbill/{productbill}', [ProductBillController::class, 'show'])->name('productbill.show');
Route::get('/productbill/{productbill}/edit', [ProductBillController::class, 'edit'])->name('productbill.edit');
Route::put('/productbill/{productbill}', [ProductBillController::class, 'update'])->name('productbill.update');
Route::delete('/productbill/{productbill}', [ProductBillController::class, 'destroy'])->name('productbill.destroy');


Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/role', [RoleController::class, 'index'])->name('role.index');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::get('/role/{role}', [RoleController::class, 'show'])->name('role.show');
Route::get('/role/{role}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/{role}', [RoleController::class, 'update'])->name('role.update');
Route::delete('/role/{role}', [RoleController::class, 'destroy'])->name('role.destroy');


Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
