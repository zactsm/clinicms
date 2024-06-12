<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalRecord;
use App\Models\Patient;
use App\Models\Doctor;

class MedicalRecordController extends Controller
{
    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();
        return view('create_medical_record', compact('patients', 'doctors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'diagnosis' => 'required',
            'treatment' => 'required',
            'notes' => 'nullable',
            'date' => 'required|date'
        ]);

        MedicalRecord::create($request->all());
        return redirect()->route('medical_records.index')->with('success', 'Medical Record created successfully');
    }
}

