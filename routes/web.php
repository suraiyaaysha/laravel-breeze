<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('admin.dashboard');

Route::get('admin/home', function () {
    return view('admin.home');
})->middleware(['auth'])->name('admin.home');

require __DIR__.'/auth.php';
