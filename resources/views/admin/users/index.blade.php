<!-- admin/users/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-2xl font-bold mb-4">Usuarios</h1>
        <x-table>
            @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $user->name }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $user->email }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $user->type }}</td>
                </tr>
            @endforeach
        </x-table>
    </div>
@endsection
