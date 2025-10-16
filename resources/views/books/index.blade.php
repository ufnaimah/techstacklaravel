@extends('layouts.app')

@section('content')
    {{-- Menampilkan pesan sukses jika ada --}}
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-slate-700">Daftar Buku</h1>
        <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow transition-transform transform hover:scale-105">
            + Tambah Buku
        </a>
    </div>

    <div class="overflow-x-auto rounded-lg border border-slate-200">
        <table class="min-w-full bg-white">
            <thead class="bg-slate-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Judul</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Penulis</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-slate-700">
                @forelse ($books as $book)
                    <tr class="border-b border-slate-200 hover:bg-slate-50">
                        <td class="py-3 px-4">
                            <span class="font-semibold">{{ $book->title }}</span>
                            <p class="text-sm text-slate-500">{{ $book->description }}</p>
                        </td>
                        <td class="py-3 px-4">{{ $book->author }}</td>
                        <td class="py-3 px-4">
                            <div class="flex items-center space-x-4">
                                <a href="{{ route('books.edit', $book->id) }}" class="text-yellow-500 hover:text-yellow-600 font-semibold">Edit</a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600 font-semibold">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4 text-slate-500">
                            Belum ada buku. Silakan tambahkan buku baru.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection