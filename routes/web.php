<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin/create-user', [App\Http\Controllers\AdminController::class, 'create']);

Route::post('/admin/users', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.users.store');

// Route::get('/admin/tasks', [App\Http\Controllers\AdminController::class, 'tasks']);
Route::get('/admin/tasks', [App\Http\Controllers\AdminController::class, 'tasks'])->name('admin.tasks');
Route::get('/admin/create-task', [App\Http\Controllers\AdminController::class, 'createTask']);
// Route::post('/admin/tasks', [App\Http\Controllers\AdminController::class, 'storeTask']);
Route::post('/admin/tasks', [App\Http\Controllers\AdminController::class, 'storeTask'])->name('admin.tasks.store');

Route::get('/admin/export-users', [App\Http\Controllers\AdminController::class, 'exportUsers']);
Route::get('/admin/export-tasks', [App\Http\Controllers\AdminController::class, 'exportTasks']);