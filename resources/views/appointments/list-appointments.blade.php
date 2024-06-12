<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include the same font as welcome.blade.php -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Include Vite for styles and scripts -->
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])

</head>
<body class="font-figtree">
    <div class="appointments-list">
        <h2>Appointments</h2>
        <a href="{{ route('appointments.new') }}" class="create-link">Create Appointment</a>
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
                            <a href="{{ route('appointments.details', $appointment->id) }}" class="view-link">View</a>
                            <a href="{{ route('appointments.update', $appointment->id) }}" class="edit-link">Edit</a>
                            <form action="{{ route('appointments.delete', $appointment->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-button">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
