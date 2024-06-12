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
                <th>Patient</th>
                <th>Staff</th>
                <!--<th>Medication</th>!-->
                <th>Diagnosis</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @isset($records)
                @for ($i = 0; $i < count($records); $i++)
                    <tr>
                        <td>{{ $records[$i]->patient->name }}</td>
                        <td>{{ $records[$i]->staff->name }}</td>
                      
                        <td>{{ $records[$i]->recDiagnosis }}</td>
                        <td>{{ $records[$i]->recDate }}</td>
                    </tr>
                @endfor
            @endisset
        </tbody>
    </table>
    <a href="{{ route('records.create') }}" class="btn btn-primary mt-3">Create New Record</a>
</div>
