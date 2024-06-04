<!-- resources/views/components/inventory.blade.php -->
<div style="padding-bottom: 5rem;">
    <div style="text-align: left; padding-bottom: 20px; padding-left: 2.5%;">
    <h2>Patients</h2>
    </div>
    <table style="border-collapse: collapse; width: 95%; margin: 0 auto;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px; width: 5%;">Patient ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">First Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Last Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Date of Birth</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Gender</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Phone No</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Address</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px; width: 10%;">Updated At</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <!-- Table body -->
        <tbody>
            <!-- Loop through inventory items and display them -->
            @foreach($patients as $item)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->patientID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->pFName }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->pLName }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->pDOB }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->pGender }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->pPhoneNo }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->pAddress }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->created_at }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->updated_at }}</td>
                <!-- Add more columns if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
