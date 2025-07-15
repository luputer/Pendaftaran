<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Halaman Siswa</title>
</head>
<body class="bg-gray-50">

    <h1 class="text-center font-semibold mt-2 py-2 text-xl text-gray-700">Ini Halaman Siswa</h1>

    <!-- Flash Message -->
    @if(session('success'))
    <div class="mx-4 mb-4 p-3 bg-green-100 border border-green-300 text-green-700 rounded">
        {{ session('success') }}
    </div>
    @endif

    <!-- Tombol Tambah Siswa -->
    <div class="flex justify-end px-4 mb-4">
        <a href="{{ route('siswa.create') }}" class="group inline-block rounded-md bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:ring-2 focus:outline-none">
            <span class="block rounded-md bg-white px-6 py-2 text-sm font-semibold group-hover:bg-transparent">
                Tambah Siswa
            </span>
        </a>
    </div>

    <!-- Tabel Siswa -->
    <div class="overflow-x-auto rounded border border-gray-300 shadow-sm mx-4">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="bg-gray-100">
                <tr class="text-left text-sm font-medium text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Nama</th>
                    <th class="px-3 py-2 whitespace-nowrap">Gambar</th>
                    <th class="px-3 py-2 whitespace-nowrap">Email</th>
                    <th class="px-3 py-2 whitespace-nowrap">Kelas</th>
                    <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
                    <th class="px-3 py-2 whitespace-nowrap">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($siswas as $siswa)
                <tr class="text-sm text-gray-800">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $siswa->nama }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">
                        <img src="{{ asset('storage/images/' . $siswa->image) }}" alt="{{ $siswa->nama }}" class="w-24 h-24 object-cover rounded-lg shadow-sm" />
                    </td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $siswa->email }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $siswa->kelas }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $siswa->nilai }}</td>
                    <td class="px-3 py-2 whitespace-nowrap flex gap-2">
                        <!-- Tombol Edit -->
                        <a href="{{ route('siswa.edit', $siswa->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">
                            Edit
                        </a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus siswa ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
