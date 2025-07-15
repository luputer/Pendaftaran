<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Data Guru</title>
</head>
<body class="bg-blue-100 font-sans text-gray-900">

<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-blue-800 text-center">Edit Data Guru</h2>

    {{-- Tampilkan error validasi jika ada --}}
    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-300 text-red-700 p-3 rounded">
            <ul class="list-disc pl-5 space-y-1 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('guru.update', $guru->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nama" class="block text-sm font-medium mb-1">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama', $guru->nama) }}"
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300 text-sm">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $guru->email) }}"
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300 text-sm">
        </div>

        <div>
            <label for="alamat" class="block text-sm font-medium mb-1">Alamat</label>
            <textarea name="alamat" id="alamat" rows="3"
                      class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring focus:ring-indigo-300 text-sm">{{ old('alamat', $guru->alamat) }}</textarea>
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('guru.index') }}"
               class="text-sm text-gray-600 hover:text-indigo-600 hover:underline">← Kembali</a>

            <button type="submit"
                    class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm hover:bg-indigo-700">
                Simpan Perubahan
            </button>
