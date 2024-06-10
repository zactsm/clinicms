<x-app-layout>

    <style>

    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Staffs Details
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-xl sm:rounded-lg flex flex-col items-center">
          
                <div class="relative flex lg:flex-row  w-full gap-3 pb-5">
                    <a class="btn lg:absolute" href="{{route('staff.index')}}">Back to Staff List</a>
                    <h2 class="text-xl text-center w-full">Add new staffs</h2>
                </div>
                
                <form style="border: 1px solid #ddd;"
                    class="w-full lg:w-1/2 flex flex-col p-5 gap-5" method="POST"
                    action="{{ route('staff.add')}}">
                    @csrf

                    <div>
                        <label for="sFName">
                            First Name:
                        </label>
                        <input class="w-full" type="text" id="sFName" name="sFName" placeholder="Firstname"
                            required>
                    </div>

                    <div>
                        <label for="sLName">
                            Last Name:
                        </label>
                        <input class="w-full" type="text" id="sLName" name="sLName" placeholder="Lastname"
                            required>
                    </div>

                    <div>
                        <label for="staffDept">
                            Department:
                        </label>
                        <input class="w-full" type="text" id="staffDept" name="staffDept" placeholder="Department"
                            required>
                    </div>

                    <div>
                        <label for="staffEmail">
                            Email:
                        </label>
                        <input class="w-full" type="email" id="staffEmail" name="staffEmail" placeholder="xxxxx@xxx.XYZ"
                            required>
                    </div>

                    <div>
                        <label for="staffPhoneNo">
                            Phone No:
                        </label>
                        <input class="w-full" type="text" id="staffPhoneNo" name="staffPhoneNo" placeholder="XXX-XXXXXXX"
                            required>
                    </div>

       

                    <div class="flex w-full gap-3" style="flex-direction: row">
                        <input type="submit" value="Add">
                    </div>
                </form>
               
            </div>
        </div>
    </div>
</x-app-layout>