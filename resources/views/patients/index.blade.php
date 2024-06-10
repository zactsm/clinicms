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
                    <table>
                        <!-- Table headers -->
                        <thead>
                            <tr>
                                <th style="width: 5%;">Patient ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th></th>
                                <!-- Add more columns if needed -->
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                            <!-- Loop through inventory items and display them -->
                            @foreach($patients as $patient)
                                <tr>
                                    <td> {{ $patient->patientID }} </td>
                                    <td>{{ $patient->pFName }}</td>
                                    <td>{{ $patient->pLName }}</td>
                                    <td>{{ $patient->pDOB }}</td>
                                    <td class="text-center">{{ $patient->pGender }}</td>
                                    <td>{{ $patient->pPhoneNo }}</td>
                                    <td>{{ $patient->pAddress }}</td>
                                    <td>
                                        <a class="target"
                                            href="{{route('patient.details', ['id' => $patient->patientID])}}">
                                            <img src="{{asset('assets/icons/ic_edit.svg')}}">
                                        </a>
                                    </td>
                                    <!-- Add more columns if needed -->

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>