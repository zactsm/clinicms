@extends('layout')

@section('content')
    <h2>Appointment Details</h2>
    <p><strong>Patient Name:</strong> {{ $appointment->patient_name }}</p>
    <p><strong>Doctor Name:</strong> {{ $appointment->doctor_name }}</p>
    <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
    <p><strong>Time:</strong> {{ $appointment->appointment_time }}</p>
    <p><strong>Notes:</strong> {{ $appointment->notes }}</p>
    <a href="{{ route('appointments.index') }}">Back to Appointments</a>
@endsection
