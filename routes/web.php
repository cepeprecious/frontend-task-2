<?php

use App\Http\Controllers\PageController;
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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', [PageController::class, 'homepage']);
Route::get('/about-us', [PageController::class, 'about_us']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/careers', [PageController::class, 'careers']);
Route::get('/careers2', [PageController::class, 'careers2']);
Route::get('/employers', [PageController::class, 'employers']);
Route::get('/contact-us', [PageController::class, 'contact_us']);
