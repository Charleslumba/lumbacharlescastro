<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('/employees', [App\Http\Controllers\EmployeesController::class, 'index'])->name('employees.index');
    Route::post('/employees', [App\Http\Controllers\EmployeesController::class, 'store'])->name('employees.store');

    Route::get('employees/{id}/edit', [App\Http\Controllers\EmployeesController::class, 'edit'])->name('employees.edit');

    Route::patch('employees/{id}', [App\Http\Controllers\EmployeesController::class, 'update'])->name('employees.update');
    Route::delete('employees/{id}', [App\Http\Controllers\EmployeesController::class, 'destroy'])->name('employees.destroy');
});


