<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Edit Dosen</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow-sm rounded">
<div class="card-body">
<form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label class="font-weight-bold">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
            value="{{ old('name', $dosen->name) }}" placeholder="Masukkan Nama Dosen">

        @error('name')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group mb-3">
        <label class="font-weight-bold">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email', $dosen->email) }}" placeholder="Masukkan Email">

        @error('email')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
    <div class="col-md-6">
        <div class="form-group mb-3">
            <label class="font-weight-bold">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                placeholder="Kosongkan jika tidak ingin mengganti">

            @error('password')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label class="font-weight-bold">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                value="{{ old('address', $dosen->address) }}" placeholder="Masukkan Alamat">

            @error('address')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
    </div>
    </div>

    <button type="submit" class="btn btn-primary me-3">SAVE</button>
    <button type="reset" class="btn btn-warning">RESET</button>

</form>
</div>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
