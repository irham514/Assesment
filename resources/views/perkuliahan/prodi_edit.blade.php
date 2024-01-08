<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Prodi</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Prodi</h1>
    
        <form action="{{ route('prodi.update', $prodis->id) }}" method="POST">
        @csrf
        @method('PUT')
        Kode: <input type="text" name="kode" required><br>
        Prodi: <input type="text" name="prodi" required><br>
        Angkatan: <input type="text" name="angkatan" required>
        <input type="submit" value="submit">
        </form>
    </div>    
</body>
</html>
