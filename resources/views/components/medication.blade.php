<!-- resources/views/components/inventory.blade.php -->
<div style="padding-bottom: 5rem;">
    <div style="text-align: left; padding-bottom: 20px; padding-left: 2.5%;">
    <h2>Medication</h2>
    </div>
    <table style="border-collapse: collapse; width: 95%; margin: 0 auto;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">Medication ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Medication Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Dosage</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Updated At</th>
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
