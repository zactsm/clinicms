<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('appointments.list-appointments', compact('appointments'));
    }

    public function create()
    {
        return view('appointments.create-appointment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'patient_name' => 'required',
            'doctor_name' => 'required',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
        ]);

        Appointment::create($request->all());

        return redirect()->route('appointments.list')
                         ->with('success', 'Appointment created successfully.');
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.view-appointments', compact('appointment'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'patient_name' => 'required',
            'doctor_name' => 'required',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());

        return redirect()->route('appointments.list')
                         ->with('success', 'Appointment updated successfully.');
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments.list')
                         ->with('success', 'Appointment deleted successfully.');
    }
}
