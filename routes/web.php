<?php

use App\Http\Controllers\IzipayController;
use Illuminate\Support\Facades\Route;

Route::get('', [IzipayController::class, 'index'])->name("index");