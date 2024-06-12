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
            Items
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl sm:rounded-lg flex flex-col items-center">
                <div class="flex gap-3 items-center justify-start w-full ">
                    <h2 class="text-xl text-left py-5 pl-5 flex gap-3">List of Items</h2>
                    <a class="btn p-1 h-fit" href="{{route('item.new')}}"> <img class="p-0"
                            src="{{asset('assets/icons/ic_plus.svg')}}"> </a>
                </div>


                <div class="w-full p-5">
                    <table>
                        <!-- Table headers -->
                        <thead>
                            <tr>
                                <th style="width: 5%;">Item ID</th>
                                <th>Supplier ID</th>
                                <th>Item Name</th>
                                <th>Item Description</th>
                                <th>Item Stock</th>
                                <th></th>
                                <!-- Add more columns if needed -->
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                            <!-- Loop through item items and display them -->
                            @foreach($items as $item)
                                <tr>
                                    <td> {{ $item->itemID }} </td>
                                    <td>{{ $item->suppID }}</td>
                                    <td>{{ $item->itemName }}</td>
                                    <td>{{ $item->itemDesc }}</td>
                                    <td>{{ $item->itemStock }}</td>
                                    <td>
                                        <a class="target"
                                            href="{{route('item.details', ['id' => $item->itemID])}}">
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
