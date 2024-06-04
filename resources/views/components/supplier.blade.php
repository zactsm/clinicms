<!-- resources/views/components/inventory.blade.php -->
<div style="padding-top: 3rem; padding-bottom: 5rem;">
    <div style="text-align: center;">
    <h2>Suppliers</h2>
    </div>
    <table style="border-collapse: collapse; width: 100%;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Supplier ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Supplier Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Supplier Email</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Phone No</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Updated At</th>
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
