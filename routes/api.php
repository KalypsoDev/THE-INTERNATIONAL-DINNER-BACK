<?php

use App\Http\Controllers\API\BillController;
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

Route::get('/bill', [BillController::class, 'index']);
Route::post('/bill', [BillController::class, 'store']);
Route::get('/bill/{bill}', [BillController::class, 'show']);
Route::put('/bill/{bill}', [BillController::class, 'update']);
Route::delete('/bill/{bill}', [BillController::class, 'destroy']);
