
<div class="container">
    <h2>Create Medical Record</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('records.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="patientID">Patient</label>
            <select name="patientID" class="form-control">
                @isset($patients)
                    @for ($i = 0; $i < count($patients); $i++)
                        <option value="{{ $patients[$i]->id }}">{{ $patients[$i]->name }}</option>
                    @endfor
                @endisset
            </select>
        </div>
        <div class="form-group">
            <label for="staffID">Staff</label>
            <select name="staffID" class="form-control">
                @isset($staffs)
                    @for ($i = 0; $i < count($staffs); $i++)
                        <option value="{{ $staffs[$i]->id }}">{{ $staffs[$i]->name }}</option>
                    @endfor
                @endisset
            </select>
        </div>
        <div class="form-group">
            <label for="medID">Medication</label>
            <select name="medID" class="form-control">
                @isset($medications)
                    @for ($i = 0; $i < count($medications); $i++)
                        <option value="{{ $medications[$i]->id }}">{{ $medications[$i]->name }}</option>
                    @endfor
                @endisset
            </select>
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
