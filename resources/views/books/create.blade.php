@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-slate-700 mb-6">Tambah Buku Baru</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="title" class="block text-sm font-medium text-slate-600">Judul Buku</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="author" class="block text-sm font-medium text-slate-600">Penulis</label>
                <input type="text" name="author" id="author" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" required>
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-slate-600">Deskripsi Singkat</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end space-x-4">
            <a href="{{ route('books.index') }}" class="text-slate-600 hover:text-slate-800 font-medium">Batal</a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-lg shadow transition-transform transform hover:scale-105">
                Simpan
            </button>
        </div>
    </form>
@endsection