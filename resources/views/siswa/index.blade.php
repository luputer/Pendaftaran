<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Halaman siswa</title>
</head>
<body>
    <h1 class="text-center font-semibold mt-2 py-2">Ini halaman siswa</h1>
    <div class="overflow-x-auto rounded border border-gray-300 shadow-sm">
        <table class="min-w-full divide-y-2 divide-gray-200">
            <thead class="ltr:text-left rtl:text-right">
                <tr class="*:font-medium *:text-gray-900">
                    <th class="px-3 py-2 whitespace-nowrap">Nama</th>
                    <th class="px-3 py-2 whitespace-nowrap">Email</th>
                    <th class="px-3 py-2 whitespace-nowrap">kelas</th>
                    <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
                    <a class="group m-2 inline-block rounded-sm bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px] hover:text-white focus:ring-3 focus:outline-hidden" href="{{ route('siswa.create') }}
">
                        <span class="block rounded-xs bg-white px-8 py-3 text-sm font-medium group-hover:bg-transparent">
                            tambah siswa
                        </span>
                    </a>
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-200">
                @foreach ($siswas as $siswa)
                <tr class="*:text-gray-900 *:first:font-medium">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $siswa->nama }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $siswa->email }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $siswa->kelas }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $siswa->nilai }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>
