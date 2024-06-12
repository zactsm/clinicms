@extends('layout')

@section('content')
    <h2>Appointments</h2>
    <a href="{{ route('appointments.new') }}">Create Appointment</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->id }}</td>
                    <td>{{ $appointment->patient_name }}</td>
                    <td>{{ $appointment->doctor_name }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->appointment_time }}</td>
                    <td>{{ $appointment->notes }}</td>
                    <td>
                        <a href="{{ route('appointments.details', $appointment->id) }}">View</a>
                        <a href="{{ route('appointments.update', $appointment->id) }}">Edit</a>
                        <form action="{{ route('appointments.delete', $appointment->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
