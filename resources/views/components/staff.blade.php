<!-- resources/views/components/inventory.blade.php -->
<div style="padding-bottom: 5rem;">
    <div style="text-align: center;">
    <h2>Staff</h2>
    </div>
    <table style="border-collapse: collapse; width: 100%;">
        <!-- Table headers -->
        <thead>
            <tr>
                <th style="border: 1px solid #ddd; padding: 8px;">Staff ID</th>
                <th style="border: 1px solid #ddd; padding: 8px;">First Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Last Name</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Department</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Email</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Phone No</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Created At</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Updated At</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <!-- Table body -->
        <tbody>
            <!-- Loop through inventory items and display them -->
            @foreach($staffs as $item)
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->staffID }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->sFName }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->sLName }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->staffDept }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->staffEmail }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->staffPhoneNo }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->created_at }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">{{ $item->updated_at }}</td>
                <!-- Add more columns if needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
