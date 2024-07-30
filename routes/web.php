<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SnailClimbController;
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
Route::get('/', function () {
    return redirect()->route('snail.form');
});


Route::get('/snail-form', [SnailClimbController::class, 'showForm'])->name('snail.form');
Route::post('/snail-calculate', [SnailClimbController::class, 'calculateDays'])->name('snail.calculate');
Route::get('/snail-result', [SnailClimbController::class, 'showResult'])->name('snail.result');
Route::get('/snail-calculation-details', [SnailClimbController::class, 'showCalculationDetails'])->name('snail.calculation.details');



