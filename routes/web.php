<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;
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

// Route::prefix('top')->group(function () {
    Route::get('/', [TopController::class, 'index'])->name('top.index');
    // Route::get('show', [TopicsController::class, 'show'])->name('show');
    // Route::get('detail', [TopicsController::class, 'detail'])->name('detail');
// });

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
