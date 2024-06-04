<!-- resources/views/components/inventory.blade.php -->
<div style="padding-bottom: 5rem;">
    <div style="text-align: center;">
    <h2>Medical Records</h2>
    </div>
    <table style="border-collapse: collapse; width: 100%;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Medical Record ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Patient ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Staff ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Medication ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Diagnosis</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Record Date</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Updated At</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <!-- Table body -->
        <tbody>
            <!-- Loop through inventory items and display them -->
            @foreach($records as $item)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->recID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->patientID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->staffID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->medID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->recDiagnosis }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->recDate }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->created_at }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->updated_at }}</td>
                <!-- Add more columns if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
