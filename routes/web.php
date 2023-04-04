<?php

use App\Http\Controllers\Admin;
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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/Form', [Admin::class, 'index']);
Route::get('/view', [Admin::class, 'view'])->name('employee.create');
Route::get('/employee/del/{id}', [Admin::class, 'delete'])->name('employee.delete');
Route::get('/employee/edit/{id}', [Admin::class, 'edit'])->name('employee.edit');
Route::POST('/employee/updates/{id}', [Admin::class, 'update'])->name('employee.update');
Route::POST('/Form', [Admin::class, 'store']);
