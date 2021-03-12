<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Training;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/team', function () {
    return view('teams');
});

Route::get('/training', [Training::class, 'show'])->name('training');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/all-trainings', function () {
    return view('admin-training');
})->name('all-trainings');

// Route::group(['middleware'=>['auth:sanctum', 'verified']],function (){
//     Route::get('training-edit', [Training::class, 'render'])->name('all-trainings');
// });