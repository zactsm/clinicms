<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Models\InventoryItem;
use App\Models\Patient;
use App\Models\Staff;
use App\Models\Medication;
use App\Models\Appointment;
use App\Models\Bill;
use App\Models\Payment;
use App\Models\Record;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function dashboard()
    {
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

        return view("dashboard", compact([
            'suppliers',
            'inventoryItems',
            'patients',
            'staffs',
            'medications',
            'appointments',
            'bills',
            'payments',
            'records',
        ]));
    }
}
