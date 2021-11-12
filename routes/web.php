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

Route::get('create-user', [App\Http\Controllers\DepartmentController::class, 'allDepartmentForIndex'])->name('all-for-index');

Route::post('add-department', [App\Http\Controllers\DepartmentController::class, 'addDepartment'])->name('depart');
Route::get('all-department', [App\Http\Controllers\DepartmentController::class, 'allDepartment'])->name('all');
Route::delete('delete-department/{id}', [App\Http\Controllers\DepartmentController::class,'deleteDepartment'])->name('delete');

Route::post('add-user', [App\Http\Controllers\UserController::class, 'addUser'])->name('add');
Route::get('all-user', [App\Http\Controllers\UserController::class, 'allUser'])->name('users');
Route::get('/user-by-id/{user_by_id}', [App\Http\Controllers\UserController::class, 'userId'])->name('user_by_id') ;

