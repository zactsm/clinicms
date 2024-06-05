<?php

use Illuminate\Support\Facades\Route;
use App\Models\Supplier;
use App\Models\InventoryItem;
use App\Models\Patient;
use App\Models\Staff;
use App\Models\Medication;
use App\Models\Appointment;
use App\Models\Bill;
use App\Models\Payment;
use App\Models\Record;
use App\Http\Controllers\PaymentController;

Route::get('/payment', [PaymentController::class, 'create'])->name('payment');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {

        // Fetch all data
        $suppliers = Supplier::all();
        $inventoryItems = InventoryItem::all();
        $patients = Patient::all();
        $staffs = Staff::all();
        $medications = Medication::all();
        $appointments = Appointment::all();
        $bills = Bill::all();
        $payments = Payment::all();
        $records = Record::all();


        // Pass data
        return view('dashboard', [
            'suppliers' => $suppliers,
            'inventoryItems' => $inventoryItems,
            'patients' => $patients,
            'staffs' => $staffs,
            'medications' => $medications,
            'appointments' => $appointments,
            'bills' => $bills,
            'payments' => $payments,
            'records' => $records,
        ]);
    })->name('dashboard');

        //return view('dashboard');
    //})->name('dashboard');
});
