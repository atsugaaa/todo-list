@extends('layout/app')
@section('title', 'Home')
@section('content')
<div class="container mx-auto p-6">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3">
            <div class="bg-white shadow-md rounded-lg">
                <div class="bg-gray-200 p-4 rounded-t-lg text-lg font-semibold">Daftar Task</div>

                <div class="p-6">
                    <a href="{{ route('task.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md mb-4 inline-block hover:bg-blue-600">Tambah Task</a>

                    <table class="min-w-full table-auto border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border-b text-left">Status</th>
                                <th class="px-4 py-2 border-b text-left">Task</th>
                                <th class="px-4 py-2 border-b text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($todos as $t)
                            <tr>
                                <td class="px-4 py-2 border-b">{{ $t->is_completed ? 'Completed' : 'Pending' }}</td>
                                <td class="px-4 py-2 border-b">{{ $t->todo }}</td>
                                <td class="px-4 py-2 border-b flex space-x-2">
                                    <a href="{{ route('task.edit', $t->todos_id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md text-xs hover:bg-blue-600">Edit</a>
                                    <form action="{{ route('task.destroy', $t->todos_id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md text-xs hover:bg-red-600" onclick="return confirm('Apakah Anda yakin ingin menghapus task ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Tailwind CSS Pagination -->
                    <div class="mt-4">
                        {{ $todos->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
