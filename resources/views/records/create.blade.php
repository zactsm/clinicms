
    <div class="container">
        <h2>Create Medical Record</h2>
        <form action="{{ route('records.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="patientID">Patient ID</label>
                <input type="text" name="patientID" class="form-control">
            </div>
            <div class="form-group">
                <label for="staffID">Staff ID</label>
                <input type="text" name="staffID" class="form-control">
            </div>
            <div class="form-group">
                <label for="medID">Medication ID</label>
                <input type="text" name="medID" class="form-control">
            </div>
            <div class="form-group">
                <label for="recDiagnosis">Diagnosis</label>
                <input type="text" name="recDiagnosis" class="form-control">
            </div>
            <div class="form-group">
                <label for="recDate">Date</label>
                <input type="date" name="recDate" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create Record</button>
        </form>
    </div>
</body>
