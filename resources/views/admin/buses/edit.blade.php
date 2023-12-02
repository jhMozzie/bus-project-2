<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Bus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">Edit Bus: {{ $bus->model }}</h1>

                    <form action="{{ route('admin.buses.update', $bus->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="model" class="block text-gray-700 text-sm font-bold mb-2">Model</label>
                            <input type="text" class="form-input rounded-md shadow-sm" id="model" name="model"
                                value="{{ $bus->model }}">
                        </div>

                        <div class="mb-4">
                            <label for="brand" class="block text-gray-700 text-sm font-bold mb-2">Brand</label>
                            <input type="text" class="form-input rounded-md shadow-sm" id="brand" name="brand"
                                value="{{ $bus->brand }}">
                        </div>

                        <div class="mb-4">
                            <label for="insurance" class="block text-gray-700 text-sm font-bold mb-2">Insurance</label>
                            <input type="text" class="form-input rounded-md shadow-sm" id="insurance"
                                name="insurance" value="{{ $bus->insurance }}">
                        </div>

                        <div class="mb-4">
                            <label for="capacity" class="block text-gray-700 text-sm font-bold mb-2">Capacity</label>
                            <input type="number" class="form-input rounded-md shadow-sm" id="capacity" name="capacity"
                                value="{{ $bus->capacity }}">
                        </div>

                        <!-- Agrega más campos según tus necesidades -->

                        <button type="submit"
                            class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
                            Save Changes
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
