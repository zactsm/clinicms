<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DefaultController;
use App\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'create'])->name('payment');
Route::post('/store-payment', [PaymentController::class, 'store'])->name('store.payment');
Route::view('/payment-cancel', 'payment-cancel')->name('payment-cancel');


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
    {
        Route::get('/patient', [PatientController::class, 'index'])->middleware(['auth', 'verified'])->name('patient.index');
        Route::get('/patient/new', function () {return view('patients.add');})->middleware(['auth', 'verified'])->name('patient.new');
        Route::post('/patient/new/add', [PatientController::class, 'patientAdd'])->middleware(['auth', 'verified'])->name('patient.add');
        Route::get('/patient/{id}', [PatientController::class, 'patientDetail'])->middleware(['auth', 'verified'])->name('patient.details');
        Route::put('/patient/{id}/update', [PatientController::class, 'patientUpdate'])->middleware(['auth', 'verified'])->name('patient.update');
        Route::delete('/patient/{id}/delete', [PatientController::class, 'patientDelete'])->middleware(['auth', 'verified'])->name('patient.delete');
    }

    //Staff routes

    {
        Route::get('/staff', [StaffController::class, 'index'])->middleware(['auth', 'verified'])->name('staff.index');
        Route::get('/staff/new', function () {return view('staffs.add');})->middleware(['auth', 'verified'])->name('staff.new');
        Route::post('/staff/new/add', [StaffController::class, 'staffAdd'])->middleware(['auth', 'verified'])->name('staff.add');
        Route::get('/staff/{id}', [StaffController::class, 'staffDetail'])->middleware(['auth', 'verified'])->name('staff.details');
        Route::put('/staff/{id}/update', [StaffController::class, 'staffUpdate'])->middleware(['auth', 'verified'])->name('staff.update');
        Route::delete('/staff/{id}/delete', [StaffController::class, 'staffDelete'])->middleware(['auth', 'verified'])->name('staff.delete');
    }

    //item routes

    {
        Route::get('/item', [ItemController::class, 'index'])->middleware(['auth', 'verified'])->name('item.index');
        Route::get('/item/new', function () {return view('items.add');})->middleware(['auth', 'verified'])->name('item.new');
        Route::post('/item/new/add', [ItemController::class, 'itemAdd'])->middleware(['auth', 'verified'])->name('item.add');
        Route::get('/item/{id}', [ItemController::class, 'itemDetail'])->middleware(['auth', 'verified'])->name('item.details');
        Route::put('/item/{id}/update', [ItemController::class, 'itemUpdate'])->middleware(['auth', 'verified'])->name('item.update');
        Route::delete('/item/{id}/delete', [ItemController::class, 'itemDelete'])->middleware(['auth', 'verified'])->name('item.delete');
    }

    //payment routes
    Route::get('/payment', [PaymentController::class, 'index'])->middleware(['auth', 'verified'])->name('payment.index');
});
