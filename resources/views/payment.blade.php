<!DOCTYPE html>
<html>
<head>
    <title>Make Payment</title>
</head>
<body>
    <h1>Make Payment</h1>

    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="sb-38akl27210811@business.example.com">

        <!-- Input field for Bill ID -->
        <label for="bill_id">Bill ID:</label>
        <input type="text" id="bill_id" name="bill_id" required>

        <!-- Input field for Payment Amount -->
        <label for="payment_amount">Payment Amount:</label>
        <input type="text" id="payment_amount" name="amount" required>

        <!-- Hidden fields for PayPal settings -->
        <input type="hidden" name="item_name" value="Payment for Bill">
        <input type="hidden" name="currency_code" value="MYR">
        <input type="hidden" name="return" value="{{ url('/') }}">
        <input type="hidden" name="cancel_return" value="{{ url('/payment-cancel') }}">

        <input type="submit" value="Pay with PayPal">
    </form>
</body>
</html>
