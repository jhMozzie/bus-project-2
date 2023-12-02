<!-- table.blade.php -->
<table class="min-w-full">
    <thead>
        <tr>
            <th
                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Nombre</th>
            <th
                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Email</th>
            <th
                class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Tipo</th>
        </tr>
    </thead>
    <tbody class="bg-white">
        @foreach ($users as $user)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $user->name }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $user->email }}</td>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">{{ $user->type }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
