<?php
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RegisteredClientController;
use App\Http\Controllers\Auth\ClientAuthController;
use App\Http\Controllers\Auth\EmployeeAuthController;

// Client Routes
Route::prefix('client')->name('client.')->group(function () {
    Route::middleware('guest:client')->group(function () {
        Route::get('login', [ClientAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [ClientAuthController::class, 'login']);
        Route::get('register', [RegisteredClientController::class, 'create'])->name('register');
        Route::post('register', [RegisteredClientController::class, 'register']);
    });

    Route::middleware('auth:client')->group(function () {
        Route::get('dashboard', [ClientAuthController::class, 'dashboard'])->name('dashboard');
        Route::post('logout', [ClientAuthController::class, 'logout'])->name('logout');
    });
});


// Employee Routes
Route::prefix('employee')->name('employee.')->group(function () {
    Route::middleware('guest:employee')->group(function () {
        Route::get('login', [EmployeeAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [EmployeeAuthController::class, 'login']);
    });

    Route::middleware('auth:employee')->group(function () {
        Route::get('dashboard', [EmployeeAuthController::class, 'dashboard'])->name('dashboard');
        Route::post('logout', [EmployeeAuthController::class, 'logout'])->name('logout');
    });
});

