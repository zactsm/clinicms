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

                <div class="relative flex w-full gap-3 pb-5">
                    <a class="btn absolute" href="{{route('staff.index')}}">Back to Staff List</a>
                    <h2 class="text-xl text-center w-full">Staff {{$staff->staffID}} : {{$staff->sFName}} {{$staff->sLName}}</h2>
                </div>

                <form style="border: 1px solid #ddd;" class="w-full lg:w-1/2 flex flex-col p-5 gap-5" method="POST"
                    action="{{ route('staff.update', ['id' => $staff->staffID])}}">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="sFName">
                            First Name:
                        </label>
                        <input class="w-full" type="text" id="sFName" name="sFName" placeholder="Firstname"
                            value="{{$staff->sFName}}">
                    </div>

                    <div>
                        <label for="sLName">
                            Last Name:
                        </label>
                        <input class="w-full" type="text" id="sLName" name="sLName" placeholder="Lastname"
                            value="{{$staff->sLName}}">
                    </div>

                    <div>
                        <label for="staffDept">
                            Department:
                        </label>
                        <input class="w-full" type="text" id="staffDept" name="staffDept" placeholder="Department"
                            value="{{$staff->staffDept}}" required>
                    </div>

                    <div>
                        <label for="staffEmail">
                            Email:
                        </label>
                        <input class="w-full" type="email" id="staffEmail" name="staffEmail" placeholder="xxxxx@xxx.XYZ"
                            value="{{$staff->staffEmail}}" required>
                    </div>

                    <div>
                        <label for="staffPhoneNo">
                            Phone No:
                        </label>
                        <input class="w-full" type="text" id="staffPhoneNo" name="staffPhoneNo"
                            placeholder="XXX-XXXXXXX" value="{{$staff->staffPhoneNo}}" required>
                    </div>

                    <div class="flex w-full gap-3" style="flex-direction: row">
                        <input type="submit" value="Update">
                    </div>
                </form>

                <form class="w-fit pt-3" method="POST" action="{{route('staff.delete', ['id' => $staff->staffID])}}">
                    @csrf
                    @method('DELETE')
                    <input class="btn dlt" type="submit" value="Remove Staff">
                </form>

            </div>
        </div>
    </div>
</x-app-layout>