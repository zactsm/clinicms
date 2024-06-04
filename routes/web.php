<?php

use Illuminate\Support\Facades\Route;
use App\Models\InventoryItem;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {

        // Fetch inventory data
        $inventoryItems = InventoryItem::all();

        // Pass data
        return view('dashboard', ['inventoryItems' => $inventoryItems]);
    })->name('dashboard');

        //return view('dashboard');
    //})->name('dashboard');
});
