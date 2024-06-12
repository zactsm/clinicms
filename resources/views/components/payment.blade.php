<!-- resources/views/components/inventory.blade.php -->
<div style="padding-bottom: 5rem;">
    <div style="text-align: left; padding-bottom: 20px; padding-left: 2.5%;">
    <h2 style="font-weight: bold;">Payment</h2>
    </div>
    <table style="border-collapse: collapse; width: 95%; margin: 0 auto;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">Payment ID</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">Bill ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Payment Amount</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Date</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Updated At</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <!-- Table body -->
        <tbody>
            <!-- Loop through inventory items and display them -->
            @foreach($payments as $item)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->paymentID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->billID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->paymentAmount }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->paymentDate }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->created_at }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->updated_at }}</td>
                <!-- Add more columns if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
