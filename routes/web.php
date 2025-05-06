<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\EmployeeAuthController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\clientController;





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',function () {
    return view('frontEnd.app');
});

Route::get('/services',function () {
    return view('frontEnd.service');
});

Route::get('/produits',function () {
    return view('frontEnd.produit');
});

Route::get('/about',function () {
    return view('frontEnd.about');
});

Route::get('/blogs',function () {
    return view('frontEnd.blog');
});

Route::get('/contact',function () {
    return view('frontEnd.contact');
});

Route::get('/panier',function () {
    return view('frontEnd.cart');
});

// Route::get('/login',function () {
//     return view('frontEnd.login');
// })->name('login');
// Route::get('/sing', function () {
//     $sing = true;
//     return view('frontEnd.login', compact('sing'));
// });


// Route::post('/verification',[clientController::class, 'store'])->name('ajouterClient');
// Route::get('/valid', function () {
//     return view('frontEnd.validation');
// });
// Route::post('/verify-code', [clientController::class, 'verifyCode'])->name('verifyClient');

// Route::get('/verify-email/{token}', function ($token) {
//     return "Verification token: " . $token;
// })->name('verify.email');


// --------------------------------------------- hamza

// Employee Auth Routes
Route::get('/admin', function () {
    return redirect()->route('employee.login');
});
Route::group(['prefix' => 'employee'], function () {
    Route::get('/login', [EmployeeAuthController::class, 'showLoginForm'])->name('employee.login');
    Route::post('/login', [EmployeeAuthController::class, 'login'])->name('auth.employee.login');
    Route::get('/dashboard', [EmployeeAuthController::class, 'dashboard'])
        ->name('auth.employee.dashboard')
        ->middleware('auth:employee');
    Route::post('/logout', [EmployeeAuthController::class, 'logout'])->name('employee.logout');
});