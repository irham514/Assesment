<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Mahasiswa</h1>
    
        <form action="{{ route('perkuliahan.store') }}" method="POST">
        {{ csrf_field() }}
        Nama: <input type="text" name="nama" required><br>
        NIM: <input type="text" name="nim" required><br>
        Prodi: <input type="text" name="prodi" required>
        <input type="submit" value="submit">
        </form>
    </div>    
</body>
</html>