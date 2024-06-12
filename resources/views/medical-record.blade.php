<div class="container">
    <h2>Create Medical Record</h2>
    <form action="{{ route('medical_records.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="patient_id">Patient</label>
            <select name="patient_id" class="form-control">
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <select name="doctor_id" class="form-control">
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="diagnosis">Diagnosis</label>
            <input type="text" name="diagnosis" class="form-control">
        </div>
        <div class="form-group">
            <label for="treatment">Treatment</label>
            <input type="text" name="treatment" class="form-control">
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Create Record</button>
    </form>
</div>
