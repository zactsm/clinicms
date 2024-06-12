<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include the same font as welcome.blade.php -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Include Vite for styles and scripts -->
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])

</head>
<body class="font-figtree">
    <div class="appointment-box">
        <div class="form">
            <div class="form-title">
                <img src="{{ asset('assets/clinic.png') }}" alt="Logo" class="appointment-icon"/>
                <h1>Create Appointment</h1>
            </div>
            <form action="{{ route('appointments.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="date" name="appointment_date" placeholder="Appointment Date" required>
                </div>
                <div class="form-group">
                    <input type="time" name="appointment_time" placeholder="Appointment Time" required>
                </div>
                <div class="form-group">
                    <textarea cols="30" rows="4" name="notes" placeholder="Notes"></textarea>
                </div>
                <strong><button type="submit" class="create-button">CREATE APPOINTMENT</button></strong>
            </form>
        </div>
    </div>
</body>
</html>
