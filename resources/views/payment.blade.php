<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include the same font as welcome.blade.php -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Include Vite for styles and scripts -->
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])

</head>
<body class="font-figtree">
    <div class="login-box">
        <div class="form">
            <div class="form-title">
            <h1>Make Payment</h1>
            </div>
            <form action="{{ route('store.payment') }}" method="post">
                @csrf
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="myclinic@business.example.com">

                <!-- Input field for Bill ID -->
                <div class="form-group">
                    <!--<label for="bill_id">Bill ID:</label>-->
                    <input type="text" id="bill_id" name="bill_id" placeholder="Bill ID" required>
                </div>

                <!-- Input field for Payment Amount -->
                <div class="form-group">
                    <!--<label for="payment_amount">Payment Amount:</label>-->
                    <input type="text" id="payment_amount" name="amount" placeholder="Payment Amount (RM)" required>
                </div>

                <!-- Hidden fields for PayPal settings -->
                <input type="hidden" name="item_name" value="Payment for Bill">
                <input type="hidden" name="currency_code" value="MYR">
                <input type="hidden" name="return" value="{{ url('/') }}">
                <input type="hidden" name="cancel_return" value="{{ url('/payment-cancel') }}">

                <button type="submit">Pay with PayPal</button>
            </form>

        </div>
    </div>
</body>
</html>
