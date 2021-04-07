<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Studentreg;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AdminTraining;
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

Route::get('/training', Studentreg::class);

// Route::middleware(['auth:sanctum', 'verified'])->get('/all-trainings', function () {
//     return view('admin-training');
// })->name('all-trainings');

Route::group(['middleware'=>['auth:sanctum', 'verified']],function (){
    Route::get('/dashboard', [Dashboard::class, 'dashboardView'])->name('dashboard');
    Route::get('/all-trainings', [AdminTraining::class, 'trainingView'])->name('all-trainings');
});