<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Bus') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">Create Bus</h1>

                    <form action="{{ route('admin.buses.store') }}" method="post">
                        @csrf

                        <div class="mb-4">
                            <label for="model" class="block text-gray-700 text-sm font-bold mb-2">Model</label>
                            <input type="text" class="form-input rounded-md shadow-sm" id="model" name="model"
                                value="{{ old('model') }}">
                        </div>

                        <div class="mb-4">
                            <label for="brand" class="block text-gray-700 text-sm font-bold mb-2">Brand</label>
                            <input type="text" class="form-input rounded-md shadow-sm" id="brand" name="brand"
                                value="{{ old('brand') }}">
                        </div>

                        <div class="mb-4">
                            <label for="insurance" class="block text-gray-700 text-sm font-bold mb-2">Insurance</label>
                            <input type="text" class="form-input rounded-md shadow-sm" id="insurance"
                                name="insurance" value="{{ old('insurance') }}">
                        </div>

                        <div class="mb-4">
                            <label for="capacity" class="block text-gray-700 text-sm font-bold mb-2">Capacity</label>
                            <input type="number" class="form-input rounded-md shadow-sm" id="capacity" name="capacity"
                                value="{{ old('capacity') }}">
                        </div>

                        <!-- Agrega más campos según tus necesidades -->

                        <button type="submit"
                            class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700 focus:outline-none focus:shadow-outline-green active:bg-green-800">
                            Create Bus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
