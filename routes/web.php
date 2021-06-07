<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebsiteController::class, 'index'])->name('index');

Route::post('/apply', [ApplicationController::class, 'store'])->name('application.store');

Route::get('/apply/complete', [WebsiteController::class, 'applicationComplete'])->name('application.complete');
