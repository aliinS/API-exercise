<?php

use App\Http\Controllers\GardenToolController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GardenToolController::class, 'index'])->name('index');

Route::get('/garden-tools/create', [GardenToolController::class, 'create'])->name('garden-tools.create');
Route::post('/garden-tools', [GardenToolController::class, 'store'])->name('garden-tools.store');

Route::get('/themes', [GardenToolController::class, 'showThemes'])->name('themes');
