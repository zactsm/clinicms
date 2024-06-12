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
            Payments
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-10 shadow-xl sm:rounded-lg flex flex-col items-center">
                <div class="flex gap-3 items-center justify-start w-full ">
                    <h2 class="text-xl text-left py-5 pl-5 flex gap-3">List of Payments</h2>
                </div>


                <div class="w-full p-5">
                    <table>
                        <!-- Table headers -->
                        <thead>
                            <tr>
                                <th style="width: 5%;">Payment ID</th>
                                <th style="width: 5%;">Bill ID</th>
                                <th>Amount</th>
                                <th style="width: 10%">Date</th>
                                <!-- Add more columns if needed -->
                            </tr>
                        </thead>
                        <!-- Table body -->
                        <tbody>
                            <!-- Loop through inventory items and display them -->
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $payment->paymentID }}</td>
                                    <td>{{ $payment->billID }}</td>

                                    <td>RM{{ $payment->paymentAmount }}</td>
                                    <td>{{ $payment->paymentDate }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
