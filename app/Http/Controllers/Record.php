<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'patientID' => 'required',
            'staffID' => 'required',
            'medID' => 'required',
            'recDiagnosis' => 'required',
            'recDate' => 'required|date'
        ]);

        Record::create($request->all());
        return redirect()->route('records.index')->with('success', 'Medical Record created successfully');
    }

    public function index()
    {
        $records = Record::all();
        return view('records.index', compact('records'));
    }
}
