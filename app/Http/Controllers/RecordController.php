<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{

    public function index()
    {
        $records = Record::all();
        return view('records.index', compact('records'));
    }

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

    public function update(Request $request, $id)
    {
        $request->validate([
            'patientID' => 'required',
            'staffID' => 'required',
            'medID' => 'required',
            'recDiagnosis' => 'required',
            'recDate' => 'required|date'
        ]);

        $record = Record::findOrFail($id);
        $record->update($request->all());

        return redirect()->route('records.index')->with('success', 'Medical Record updated successfully');
    }

    public function detail($id)
    {
        $record = Record::where('recID', $id)->firstOrFail();
        return view('records.details', compact('record'));
    }

    public function delete($id)
    {
        $patient = Record::where('recID', $id)->firstOrFail();
        $patient->delete();

        $patients = Record::all();
        return redirect()->route('records.index')->with('success', 'Medical Record deleted successfully');


    }

}
