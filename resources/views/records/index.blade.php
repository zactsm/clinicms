<div class="container">
    <h2>Medical Records</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Staff ID</th>
                <th>Medication ID</th>
                <th>Diagnosis</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->patientID }}</td>
                    <td>{{ $record->staffID }}</td>
                    <td>{{ $record->medID }}</td>
                    <td>{{ $record->recDiagnosis }}</td>
                    <td>{{ $record->recDate }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
