<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

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

// Route::get('/feedback-create', function () {
//     return view('feedback.create');
// });
Auth::routes();
Route::get('/', [FeedbackController::class, 'create'])->name('feedback.create');
// Route::get('/feedback-detail', [FeedbackController::class, 'index'])->name('feedback.index');
// Route::get('/feedback-detail/{id}', [FeedbackController::class, 'show'])->name('feedback.show');
// Route::post('/feedback-detail', [FeedbackController::class, 'store'])->name('feedback.store');
Route::post('/feedback-detail', [FeedbackController::class, 'store'])->name('feedback.store');
Route::middleware('auth')->group(function () {
    Route::get('/feedback-detail', [FeedbackController::class, 'index'])->name('feedback.index');
    Route::get('/feedback-detail/{id}', [FeedbackController::class, 'show'])->name('feedback.show');
});
