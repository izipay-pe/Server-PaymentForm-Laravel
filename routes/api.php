<?php

use App\Http\Controllers\IzipayController;
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

Route::post('formtoken', [IzipayController::class, 'formtoken'])->name("formtoken");
Route::post("validate", [IzipayController::class, 'validateData'])->name("validate");
Route::post('ipn', [IzipayController::class, 'ipn']);