<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">Buses</h1>
                    <a href="{{ route('admin.buses.create') }}"
                        class="text-white bg-green-500 px-4 py-2 rounded hover:bg-green-600 focus:outline-none focus:shadow-outline-green active:bg-green-800">
                        Crear Bus
                    </a>
                    <table class="table-auto w-full my-5">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Modelo</th>
                                <th class="px-4 py-2">Marca</th>
                                <th class="px-4 py-2">Seguro</th>
                                <th class="px-4 py-2">Aforo</th>
                                <th class="px-4 py-2">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buses as $bus)
                                <tr>
                                    <td class="border px-4 py-2">{{ $bus->model }}</td>
                                    <td class="border px-4 py-2">{{ $bus->brand }}</td>
                                    <td class="border px-4 py-2">{{ $bus->insurance }}</td>
                                    <td class="border px-4 py-2">{{ $bus->capacity }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('admin.buses.show', $bus->id) }}"
                                            class="text-blue-500 hover:underline px-3 py-1 bg-blue-100 hover:bg-blue-200 rounded">Ver</a>
                                        <a href="{{ route('admin.buses.edit', $bus->id) }}"
                                            class="text-yellow-500 hover:underline px-3 py-1 bg-yellow-100 hover:bg-yellow-200 rounded">Editar</a>
                                        <form class="inline" action="{{ route('admin.buses.destroy', $bus->id) }}"
                                            method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="text-red-500 hover:underline px-3 py-1 bg-red-100 hover:bg-red-200 rounded">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
