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
                    <h2 class="text-xl text-center w-full">items {{$item->itemID}}: {{$item->suppID}} {{$item->itemName}}</h2>
                </div>


                <form style="border: 1px solid #ddd;"
                    class="patient-form w-full lg:w-1/2 flex flex-col p-5 gap-5" method="POST"
                    action="{{ route('item.update', $item->itemID)}}">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="suppID">
                            Supplier ID:
                        </label>
                        <input class="w-full" type="text" id="suppID" name="suppID" value="{{ $item->suppID }}"
                            required>
                    </div>

                    <div>
                        <label for="itemName">
                            Item Name:
                        </label>
                        <input class="w-full" type="text" id="itemName" name="itemName" value="{{ $item->itemName }}"
                            required>
                    </div>

                    <div>
                        <label for="itemDesc">
                            Item Description:
                        </label>
                        <input class="w-full" type="text" id="itemDesc" name="itemDesc" value="{{ $item->itemDesc }}"
                        required>
                    </div>

                    <div>
                        <label for="itemStock">
                            Item Stock:
                        </label>
                        <input class="w-full" type="text" id="itemStock" name="itemStock" value="{{ $item->itemStock }}"
                            required>
                    </div>

                    <div class="flex w-full gap-3" style="flex-direction: row">
                        <input type="submit" value="Update">
                    </div>
                </form>
                <form class="w-fit pt-3" method="POST"
                    action="{{route('item.delete', ['id' => $item->itemID])}}">
                    @csrf
                    @method('DELETE')
                    <input class="btn dlt" type="submit" value="Remove item">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
