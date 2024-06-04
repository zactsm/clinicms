<!-- resources/views/components/inventory.blade.php -->
<div style="padding-bottom: 5rem;">
    <div style="text-align: center;">
    <h2>Medication</h2>
    </div>
    <table style="border-collapse: collapse; width: 100%;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Medication ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Medication Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Dosage</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Updated At</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <!-- Table body -->
        <tbody>
            <!-- Loop through inventory items and display them -->
            @foreach($medications as $item)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->medID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->medName }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->medDesc }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->medDosage }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->created_at }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->updated_at }}</td>
                <!-- Add more columns if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
