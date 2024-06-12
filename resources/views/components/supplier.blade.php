<!-- resources/views/components/inventory.blade.php -->
<div style="padding-top: 3rem; padding-bottom: 5rem;">
    <div style="text-align: left; padding-bottom: 20px; padding-left: 2.5%;">
    <h2 style="font-weight: bold;">Suppliers</h2>
    </div>
    <table style="border-collapse: collapse; width: 95%; margin: 0 auto;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">Supplier ID</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 45%;">Supplier Name</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Supplier Email</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 15%;">Phone No</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Updated At</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <!-- Table body -->
        <tbody>
            <!-- Loop through inventory items and display them -->
            @foreach($suppliers as $item)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->suppID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->suppName }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->suppEmail }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->suppPhoneNo }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->created_at }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->updated_at }}</td>
                <!-- Add more columns if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
