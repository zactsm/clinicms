@extends('layout')

@section('content')
    <h2>Create Appointment</h2>
    <form action="{{ route('appointments.add') }}" method="POST">
        @csrf
        <div>
            <label>Patient Name:</label>
            <input type="text" name="patient_name" required>
        </div>
        <div>
            <label>Doctor Name:</label>
            <input type="text" name="doctor_name" required>
        </div>
        <div>
            <label>Appointment Date:</label>
            <input type="date" name="appointment_date" required>
        </div>
        <div>
            <label>Appointment Time:</label>
            <input type="time" name="appointment_time" required>
        </div>
        <div>
            <label>Notes:</label>
            <textarea name="notes"></textarea>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection
