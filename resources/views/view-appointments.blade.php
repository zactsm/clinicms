<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appointment Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include the same font as welcome.blade.php -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Include Vite for styles and scripts -->
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])

</head>
<body class="font-figtree">
    <div class="appointment-details">
        <h2>Appointment Details</h2>
        <p><strong>Patient Name:</strong> {{ $appointment->patient_name }}</p>
        <p><strong>Doctor Name:</strong> {{ $appointment->doctor_name }}</p>
        <p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>
        <p><strong>Time:</strong> {{ $appointment->appointment_time }}</p>
        <p><strong>Notes:</strong> {{ $appointment->notes }}</p>
        <a href="{{ route('appointments.list') }}" class="back-link">Back to Appointments</a>
    </div>
</body>
</html>
