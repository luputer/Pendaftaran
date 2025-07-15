<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Tambah Siswa</title>
</head>
<body class="bg-gray-50 py-10">

    <form method="POST" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded shadow-sm" action="{{ route('siswa.store') }}">
        @csrf

        <h2 class="text-2xl font-bold text-center mb-6">Tambah Siswa</h2>

        <!-- Nama -->
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="nama" id="nama" required placeholder=" " value="{{ old('nama') }}" class="peer block w-full border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none" />
            <label for="nama" class="form-label">Nama</label>
        </div>

        <!-- Email -->
        <div class="relative z-0 w-full mb-5 group">
            <input type="email" name="email" id="email" required placeholder=" " value="{{ old('email') }}" class="peer block w-full border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none" />
            <label for="email" class="form-label">Email</label>
        </div>

        <!-- Kelas -->
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="kelas" id="kelas" required placeholder=" " value="{{ old('kelas') }}" class="peer block w-full border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none" />
            <label for="kelas" class="form-label">Kelas</label>
        </div>

        <!-- Nilai -->
        <div class="relative z-0 w-full mb-5 group">
            <input type="number" name="nilai" id="nilai" min="0" max="100" required placeholder=" " value="{{ old('nilai') }}" class="peer block w-full border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none" />
            <label for="nilai" class="form-label">Nilai</label>
        </div>

        <!-- Upload Gambar -->
        <div class="relative z-0 w-full mb-5 group">
            <input type="file" name="image" id="image" accept="image/*" class="peer block w-full border-0 border-b-2 border-gray-300 bg-transparent py-2 px-0 text-sm text-gray-900 focus:border-blue-600 focus:outline-none" />
            <label for="image" class="form-label">Upload Foto</label>
        </div>

        <!-- Submit -->
        <button type="submit" class="w-full rounded bg-blue-600 px-5 py-2.5 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm font-medium">
            Simpan
        </button>
    </form>

    <style>
        .form-label {
            @apply absolute top-3 -z-10 origin-[0] scale-75 transform text-sm text-gray-500 transition-all peer-placeholder-shown: translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600;
        }

    </style>

</body>
</html>
