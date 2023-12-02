<!-- resources/views/admin/buses/show.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bus Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">{{ $bus->model }}</h1>
                    <p><strong>Brand:</strong> {{ $bus->brand }}</p>
                    <p><strong>Insurance:</strong> {{ $bus->insurance }}</p>
                    <p><strong>Capacity:</strong> {{ $bus->capacity }}</p>
                    <!-- Agrega más detalles según tus campos de la tabla 'buses' -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
