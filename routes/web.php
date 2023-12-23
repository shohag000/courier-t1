<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inertia\UserController;
use App\Http\Controllers\Inertia\BranchController;
use App\Http\Controllers\Inertia\ShipmentController;
use Inertia\Inertia;

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
//     return Inertia::render('Hello', []);
// });

Route::inertia('/', 'Hello');

// Route::inertia('/users', [UserController::class, 'index']);
// Route::inertia('/branches', [BranchController::class, 'index']);
// Route::inertia('/shipments', [ShipmentController::class, 'index']);
