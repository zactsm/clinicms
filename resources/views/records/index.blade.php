<x-app-layout>

    <style>
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Patients
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl sm:rounded-lg flex flex-col items-center">
                <div class="flex gap-3 items-center justify-start w-full ">
                    <h2 class="text-xl text-left py-5 pl-5 flex gap-3">List of Patients</h2>
                    <a class="btn p-1 h-fit" href="{{route('patient.new')}}"> <img class="p-0"
                            src="{{asset('assets/icons/ic_plus.svg')}}"> </a>
                </div>


                <div class="w-full p-5">
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
                <th>Medication</th>
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
                        <td>{{ $records[$i]->medication->name }}</td>
                        <td>{{ $records[$i]->recDiagnosis }}</td>
                        <td>{{ $records[$i]->recDate }}</td>
                    </tr>
                @endfor
            @endisset
        </tbody>
    </table>
    <a href="{{ route('records.create') }}" class="btn btn-primary mt-3">Create New Record</a>
</div>
</x-app-layout>
