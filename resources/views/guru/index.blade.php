<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Halaman Guru</title>
</head>
<body class="bg-blue-100 text-gray-900 font-sans">

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold text-center text-blue-800 mb-4">Data Guru</h1>
        <p class="text-center mb-6">Selamat datang di halaman data guru.</p>

        <div class="flex justify-end mb-4">
            <a
                href="{{ route('guru.create') }}"
                class="inline-block rounded-md border border-indigo-500 bg-indigo-500 px-3 py-1 text-xs font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
            >
                + Tambah Guru
            </a>
        </div>

        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-blue-200">
                    <tr class="*:text-sm *:font-semibold *:text-blue-900 text-left">
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Alamat</th>
                        <th class="px-4 py-3">Aksi</th> {{-- Kolom baru --}}
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach ($guru as $g)
                    <tr class="*:text-gray-800 *:first:font-medium hover:bg-blue-50">
                        <td class="px-4 py-2 whitespace-nowrap">{{ $g->nama }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $g->email }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">{{ $g->alamat }}</td>
                        <td class="px-4 py-2 whitespace-nowrap">
                            <a href="{{ route('guru.edit', $g->id) }}"
                               class="inline-block text-sm text-indigo-600 hover:text-indigo-800 hover:underline">
                                Edit
                            </a>
                             <!-- Tombol Delete -->
        <form action="{{ route('guru.destroy', $g->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')" class="inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-2 py-1 text-sm text-white bg-red-500 rounded hover:bg-red-700">
                Delete
            </button>
        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
