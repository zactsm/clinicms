<x-app-layout>

    <style>
        .record-form {
            border: 1px solid #ddd;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            display: block;
            margin-bottom: .5rem;
        }
        input, select, textarea {
            width: 100%;
            padding: .5rem;
            margin-top: .25rem;
            box-sizing: border-box;
        }
        .btn {
            background-color: #3490dc;
            color: white;
            padding: .5rem 1rem;
            text-align: center;
            text-decoration: none;
            border-radius: .25rem;
        }
        .btn:hover {
            background-color: #2779bd;
        }
    </style>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create Medical Record
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-10 overflow-hidden shadow-xl sm:rounded-lg flex flex-col items-center">

            <div class="relative flex lg:flex-row w-full gap-3 pb-5">
                <a class="btn lg:absolute" href="{{ route('records.index') }}">Back to Records List</a>
                <h2 class="text-xl text-center w-full">Add New Medical Record</h2>
            </div>

            <form style="border: 1px solid #ddd;" class="record-form w-full lg:w-1/2 flex flex-col p-5 gap-5" method="POST" action="{{ route('records.store') }}">
                @csrf

                <div>
                    <label for="patientID">
                        Patient ID:
                    </label>
                    <input class="w-full" type="text" id="patientID" name="patientID" placeholder="Patient ID" value="{{ old('patientID') }}" required>
                    @foreach ($errors->get('patientID') as $error)
                        <span class="text-red-500">{{ $error }}</span>
                    @endforeach
                </div>

                <div>
                    <label for="staffID">
                        Staff ID:
                    </label>
                    <input class="w-full" type="text" id="staffID" name="staffID" placeholder="Staff ID" value="{{ old('staffID') }}" required>
                    @foreach ($errors->get('staffID') as $error)
                        <span class="text-red-500">{{ $error }}</span>
                    @endforeach
                </div>

                <div>
                    <label for="medID">
                        Medication ID:
                    </label>
                    <input class="w-full" type="text" id="medID" name="medID" placeholder="Medication ID" value="{{ old('medID') }}" required>
                    @foreach ($errors->get('medID') as $error)
                        <span class="text-red-500">{{ $error }}</span>
                    @endforeach
                </div>

                <div>
                    <label for="recDiagnosis">
                        Diagnosis:
                    </label>
                    <input class="w-full" type="text" id="recDiagnosis" name="recDiagnosis" placeholder="Diagnosis" value="{{ old('recDiagnosis') }}" required>
                    @foreach ($errors->get('recDiagnosis') as $error)
                        <span class="text-red-500">{{ $error }}</span>
                    @endforeach
                </div>

                <div>
                    <label for="recDate">
                        Date:
                    </label>
                    <input class="w-full" type="date" id="recDate" name="recDate" value="{{ old('recDate') }}" required>
                    @foreach ($errors->get('recDate') as $error)
                        <span class="text-red-500">{{ $error }}</span>
                    @endforeach
                </div>

                <div class="flex w-full gap-3" style="flex-direction: row">
                    <input type="submit" value="Create Record" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>


