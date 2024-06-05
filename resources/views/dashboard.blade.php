<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
                <x-supplier :suppliers="$suppliers" />
                <x-inventory :inventoryItems="$inventoryItems" />
                <x-patient :patients="$patients" />
                <x-staff :staffs="$staffs" />
                <x-medication :medications="$medications" />
                <x-appointment :appointments="$appointments" />
                <x-bill :bills="$bills" />
                <x-payment :payments="$payments" />
                <x-record :records="$records" />

            </div>
        </div>
    </div>
</x-app-layout>