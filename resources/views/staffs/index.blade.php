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
            Staffs
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl sm:rounded-lg flex flex-col items-center">
                <div class="flex gap-3 items-center justify-start w-full ">
                    <h2 class="text-xl text-left py-5 pl-5 flex gap-3">List of Staffs</h2>
                    <a class="btn p-1 h-fit" href="{{route('staff.new')}}"> <img class="p-0" src="{{asset('assets/icons/ic_plus.svg')}}"> </a>
                </div>
                <div class="w-full p-5">
                    <table>
                        <!-- Table headers -->
                        <thead>
                            <tr>
                                <th style="width: 5%;">Patient ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Phone no.</th>
                                <th></th>
                                <!-- Add more columns if needed -->
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                            <!-- Loop through inventory items and display them -->
                            @foreach($staffs as $staff)
                                <tr>
                                    <td> {{ $staff->staffID }} </td>
                                    <td>{{ $staff->sFName }}</td>
                                    <td>{{ $staff->sLName }}</td>
                                    <td>{{ $staff->staffDept }}</td>
                                    <td>{{ $staff->staffEmail }}</td>
                                    <td>{{ $staff->staffPhoneNo }}</td>
                                    <td>
                                        <a class="target"
                                            href="{{route('staff.details', ['id' => $staff->staffID])}}">
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