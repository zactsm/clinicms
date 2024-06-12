<!-- payment-cancel.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Cancelled</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include the same font as welcome.blade.php -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Include Vite for styles and scripts -->
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])

</head>
<body class="font-figtree">
    <div class="login-box">
    <div class="cancel-container">
    <h1 class="box-title">Payment Cancelled</h1>
    <div class="return-button">
    <button class="pay-button" onclick="window.location='{{ url('/') }}'">Return to Homepage</button>
    </div>
    </div>
    </div>
</body>
</html>
