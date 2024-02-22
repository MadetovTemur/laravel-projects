<?php

use Illuminate\Support\Facades\Route;

// Import user Controllers
use App\Http\Controllers\MainController;
use App\Http\Controllers\SupportController;



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

Route::get('/', [MainController::class, 'index']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/support',[MainController::class, 'support'])->name('support');


Route::post('/support/review/check', [SupportController::class, 'save_message']);











// Route::get('/{username}', function ($username) {
//     return $username;
// });