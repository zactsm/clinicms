<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::all();
        return view("patients.index", compact("patients"));
    }

    public function patientAdd(Request $request)
    {
        $patient = new Patient();
        $patient->pFName = $request->input('pFName');
        $patient->pLName = $request->input('pLName');
        $patient->pDOB = $request->input('pDOB');
        $patient->pGender = $request->input('pGender');
        $patient->pPhoneNo = $request->input('pPhoneNo');
        $patient->pAddress = $request->input('pAddress');

        // let Laravel handle (auto)
        // $patient->created_at = $request->input('created_at'); //can remove this line
        // $patient->updated_at = $request->input('updated_at'); //can remove this line
        $patient->save();

        $patients = Patient::all();
        return view("patients.index", compact("patients"));
    }

    public function patientDetail($id)
    {
        $patient = Patient::where('patientID', $id)->firstOrFail();
        return view('patients.details', compact("patient"));
    }

    public function patientUpdate(Request $request, $id)
    {
        $patient = Patient::where('patientID', $id)->firstOrFail();
        $patient->pFName = $request->input('pFName');
        $patient->pLName = $request->input('pLName');
        $patient->pDOB = $request->input('pDOB');
        $patient->pGender = $request->input('pGender');
        $patient->pPhoneNo = $request->input('pPhoneNo');
        $patient->pAddress = $request->input('pAddress');
        $patient->save();

        return view('patients.details', compact('patient'));
    }

    public function patientDelete($id)
    {
        $patient = Patient::where('patientID', $id)->firstOrFail();
        $patient->delete();

        $patients = Patient::all();
        return view('patients.index', compact('patients'));

    }
}
