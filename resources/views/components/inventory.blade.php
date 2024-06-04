<!-- resources/views/components/inventory.blade.php -->
<div style="padding-bottom: 5rem;"> <!-- Add bottom padding -->
    <div style="text-align: left; padding-bottom: 20px; padding-left: 2.5%;">
        <h2>Inventory</h2>
    </div>
    <table style="border-collapse: collapse; width: 95%; margin: 0 auto;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">Item ID</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">Supplier ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Item Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Stock</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Updated At</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <!-- Table body -->
        <tbody>
            <!-- Loop through inventory items and display them -->
            @foreach($inventoryItems as $item)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->itemID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->suppID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->itemName }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->itemDesc }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->itemStock }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->created_at }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->updated_at }}</td>
                <!-- Add more columns if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
