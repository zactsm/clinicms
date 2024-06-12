<x-app-layout>
    <style>
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Medical Records
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl sm:rounded-lg flex flex-col items-center">
                @if(session('success'))
                    <div class="alert alert-success w-full">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="flex gap-3 items-center justify-start w-full ">
                    <h2 class="text-xl text-left py-5 pl-5 flex gap-3">List of Medical Records</h2>
                    <a class="btn p-1 h-fit" href="{{ route('records.create') }}">
                        <img class="p-0" src="{{ asset('assets/icons/ic_plus.svg') }}">
                    </a>
                </div>

                <div class="w-full p-5">
                    <table>
                        <thead>
                            <tr>
                                <th>Record ID</th>
                                <th>Patient ID</th>
                                <th>Staff ID</th>
                                <th>Medication ID</th>
                                <th>Diagnosis</th>
                                <th>Record Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records as $record)
                                <tr>
                                    <td>{{ $record->recID }}</td>
                                    <td>{{ $record->patientID }}</td>
                                    <td>{{ $record->staffID }}</td>
                                    <td>{{ $record->medID }}</td>
                                    <td>{{ $record->recDiagnosis }}</td>
                                    <td>{{ $record->recDate }}</td>
                                    <td>
                                        <a class="target"
                                            href="{{route('records.details', ['id' => $record->recID])}}">
                                            <img src="{{asset('assets/icons/ic_edit.svg')}}">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
