<x-app-layout>

    <style>

    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Patients Details
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-xl sm:rounded-lg flex flex-col items-center">
            
            <div class="relative flex lg:flex-row  w-full gap-3 pb-5">
                    <a class="btn lg:absolute" href="{{route('patient.index')}}">Back to Patient List</a>
                    <h2 class="text-xl text-center w-full">Add new patient</h2>
                </div>
            
           
                <form style="border: 1px solid #ddd;"
                    class="patient-form w-full lg:w-1/2 flex flex-col p-5 gap-5" method="POST"
                    action="{{ route('patient.add')}}">
                    @csrf

                    <div>
                        <label for="pFName">
                            First Name:
                        </label>
                        <input class="w-full" type="text" id="pFName" name="pFName" placeholder="Firstname"
                            required>
                    </div>

                    <div>
                        <label for="pLName">
                            Last Name:
                        </label>
                        <input class="w-full" type="text" id="pLName" name="pLName" placeholder="Lastname"
                            required>
                    </div>

                    <div>
                        <label for="pGender">
                            Gender:
                        </label>

                        <select style="padding: 10px" class="w-full" class="input" id="pGender" name="pGender" required>
                            <option value="M" selected> Male </option>
                            <option value="F" > Female </option>
                        </select>
                    </div>

                    <div>
                        <label for="pDOB">
                            Date of Birth:
                        </label>
                        <input class="w-full" type="date" id="pDOB" name="pDOB" required>
                    </div>

                    <div>
                        <label for="pPhoneNo">
                            Phone No:
                        </label>
                        <input class="w-full" type="text" id="pPhoneNo" name="pPhoneNo"placeholder="XXX-XXXXXXX"
                            required>
                    </div>

                    <div class="flex flex-col">
                        <label for="pAddress">
                            Address:
                        </label>

                        <textarea rows="5" class="w-full" id="pAddress" name="pAddress" required>

                      </textarea>
                    </div>

                    <div class="flex w-full gap-3" style="flex-direction: row">
                        <input type="submit" value="Add">
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</x-app-layout>