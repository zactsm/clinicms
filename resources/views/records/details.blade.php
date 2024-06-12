<x-app-layout>

    <style>

    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Medical Record Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-xl sm:rounded-lg flex flex-col items-center">

                    <div class="relative flex lg:flex-row  w-full gap-3 pb-5">
                        <a class="btn lg:absolute" href="{{route('records.index')}}">Back to Records List</a>
                        <h2 class="text-xl text-center w-full">Medical Record {{$record->recID}}</h2>

                        </div>
                    <form style="border: 1px solid #ddd;"
                    class="patient-form w-full lg:w-1/2 flex flex-col p-5 gap-5" method="POST"
                    action="{{ route('records.update', $record->recID)}}">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="patientID">
                            Patient ID:
                        </label>
                        <input class="w-full" type="text" id="patientID" name="patientID" value="{{ $record->recID }}"
                            required>
                    </div>

                    <div>
                        <label for="staffID">
                            Staff ID:
                        </label>
                        <input class="w-full" type="text" id="staffID" name="staffID" value="{{ $record->staffID }}"
                            required>
                    </div>

                    <div>
                        <label for="medID">
                        Medication ID:
                    </label>
                    <input class="w-full" type="text" id="medID" name="medID" value="{{ $record->medID }}"
                            required>
                    </div>

                    <div>
                        <label for="recDiagnosis">
                            Diagnosis:
                        </label>
                        <input class="w-full" type="text" id="recDiagnosis" name="recDiagnosis" value="{{ $record->recDiagnosis }}"
                        required>
                    </div>

                    <div>
                        <label for="recDate">
                            Date:
                        </label>
                        <input class="w-full" type="date" id="recDate" name="recDate" value="{{ $record->recDate }}" required>
                    </div>




                    <div class="flex w-full gap-3" style="flex-direction: row">
                        <input type="submit" value="Update">
                    </div>
                </form>

                <form class="w-fit pt-3" method="POST"
                    action="{{route('records.delete', ['id' => $record->recID])}}">
                    @csrf
                    @method('DELETE')
                    <input class="btn dlt" type="submit" value="Remove Record">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
