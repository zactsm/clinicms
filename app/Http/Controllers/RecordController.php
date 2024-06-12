<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;
use App\Models\Patient;
use App\Models\Staff;
use App\Models\Medication;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::with(['patient', 'staff', 'medication'])->get();
        return view('records.index', compact('records'));
    }

    public function create()
    {
        $patients = Patient::all();
        $staffs = Staff::all();
        $medications = Medication::all();
        return view('records.create', compact('patients', 'staffs', 'medications'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patientID' => 'required|exists:patients,id',
            'staffID' => 'required|exists:staff,id',
            'medID' => 'required|exists:medications,id',
            'recDiagnosis' => 'required|string',
            'recDate' => 'required|date'
        ]);

        Record::create($request->all());
        return redirect()->route('records.index')->with('success', 'Medical Record created successfully');
    }
}
