<x-app-layout>

    <style>

    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            item Details
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 overflow-hidden shadow-xl sm:rounded-lg flex flex-col items-center">

            <div class="relative flex lg:flex-row  w-full gap-3 pb-5">
                    <a class="btn lg:absolute" href="{{route('item.index')}}">Back to item List</a>
                    <h2 class="text-xl text-center w-full">Add new item</h2>
                </div>


                <form style="border: 1px solid #ddd;"
                    class="item-form w-full lg:w-1/2 flex flex-col p-5 gap-5" method="POST"
                    action="{{ route('item.add')}}">
                    @csrf

                    <div>
                        <label for="suppID">
                            Suuplier ID:
                        </label>
                        <input class="w-full" type="text" id="suppID" name="suppID" placeholder="supplierID"
                            required>
                    </div>

                    <div>
                        <label for="itemName">
                            Item Name:
                        </label>
                        <input class="w-full" type="text" id="itemName" name="itemName" placeholder="itemName"
                            required>
                    </div>

                    <div>
                        <label for="itemDesc">
                            Item Description:
                        </label>
                        <input class="w-full" type="text" id="itemDesc" name="itemDesc" placeholder="itemDesc"
                            required>
                    </div>

                    <div>
                        <label for="itemStock">
                            Item Stock:
                        </label>
                        <input class="w-full" type="text" id="itemStock" name="itemStock" placeholder="itemStock"
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
