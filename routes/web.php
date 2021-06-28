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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('import', [App\Http\Controllers\ReportsController::class, 'import'])->name('import');
Route::post('import_csv', [App\Http\Controllers\ReportsController::class, 'import_csv'])->name('import_csv');
Route::get('index', [App\Http\Controllers\ReportsController::class, 'index'])->name('index');
Route::get('reportlist', [App\Http\Controllers\ReportsController::class, 'getReports'])->name('reportlist');