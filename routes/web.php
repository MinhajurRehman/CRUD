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

// return welcome page there is some buttons
Route::get('/', function () {
    return view('welcome');
});
//Go to Form page
Route::get('/Form', [Admin::class, 'index']);
//Go to View page
Route::get('/view', [Admin::class, 'view'])->name('employee.create');
//Go to View page and delete data
Route::get('/employee/del/{id}', [Admin::class, 'delete'])->name('employee.delete');
//Go to View page and Edit data
Route::get('/employee/edit/{id}', [Admin::class, 'edit'])->name('employee.edit');
//After Edit data that update in database and view page using post method
Route::POST('/employee/update/{id}', [Admin::class, 'update'])->name('employee.update');
//Store Enter Data with the help of post method
Route::POST('/Form', [Admin::class, 'store']);
