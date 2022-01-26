<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/locale/{locale}', [LocaleController::class, 'setLocale']);
Route::get('/locale', [LocaleController::class, 'getLocale']);

Route::get('/hero', [LandingController::class, 'hero']);

