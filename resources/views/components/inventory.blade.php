<!-- resources/views/components/inventory.blade.php -->
<div>
    <div style="text-align: center;">
    <h2>Inventory</h2>
    </div>
    <table style="border-collapse: collapse; width: 100%;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Item ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Supplier ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Item Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Stock</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Updated At</th>
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
