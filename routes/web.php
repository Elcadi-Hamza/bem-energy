<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;

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

Route::get('/login',function () {
    return view('frontEnd.login');
});
Route::get('/sing', function () {
    $sing = true;
    return view('frontEnd.login', compact('sing'));
});


Route::post('/verification',[clientController::class, 'store'])->name('ajouterClient');
Route::get('/valid', function () {
    return view('frontEnd.validation');
});
Route::post('/verify-code', [clientController::class, 'verifyCode'])->name('verifyClient');

Route::get('/verify-email/{token}', function ($token) {
    return "Verification token: " . $token;
})->name('verify.email');