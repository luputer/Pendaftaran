<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <title>Form Guru</title><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Form Tambah Guru</title>
</head>
<body class="bg-blue-100 min-h-screen flex items-center justify-center">

    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <h1 class="text-2xl font-bold text-center text-blue-700 mb-6">Form Tambah Guru</h1>

        <form action="{{ route('guru.store') }}" method="POST" class="space-y-4">
            @csrf

            {{-- Input Nama --}}
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama"
                       class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                       required>
            </div>

            {{-- Input Email --}}
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                       class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                       required>
            </div>

            {{-- Input Alamat --}}
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3"
                          class="mt-1 block w-full rounded border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                          required></textarea>
            </div>

            {{-- Tombol --}}
            <div class="flex justify-end space-x-2 pt-4">
                <a href="{{ route('guru.index') }}"
                   class="inline-block bg-gray-400 text-white text-sm px-4 py-2 rounded hover:bg-gray-500">
                    Batal
                </a>
                <button type="submit"
                        class="inline-block bg-blue-600 text-white text-sm px-4 py-2 rounded hover:bg-blue-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>

</body>
</html>

</head>
<body>

</body>
</html>
