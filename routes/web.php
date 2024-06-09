<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DefaultController;
use App\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'create'])->name('payment');
Route::post('/store-payment', [PaymentController::class, 'store'])->name('store.payment');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [DefaultController::class, 'dashboard'])->name('dashboard');
    // Don't spam on DefaultController, make the others in their specific controller;
    // To go to specific controller, press Ctrl+Click on Targetcontroller [exp: click on line 23 'DefaultController']

    //Patients routes


    //Staff routes
});
