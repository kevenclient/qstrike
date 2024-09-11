<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FactoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::resource('factories', FactoryController::class);
    Route::resource('employees', EmployeeController::class);
    Route::post('logout', LogoutController::class);
});

Route::middleware('guest')->group(function () {
    Route::post('login', LoginController::class);

    Route::get('login', function () {
        return view('login');
    })->name('login');
});

Route::fallback(function () {
    return redirect()->route('login');
});
