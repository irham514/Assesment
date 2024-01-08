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
        <h1>Dosen</h1>
    
        <form action="{{ route('dosen.store') }}" method="POST">
        {{ csrf_field() }}
        Nama: <input type="text" name="nama" required><br>
        NIP: <input type="text" name="nip" required><br>
        Jabatan: <input type="text" name="jabatan" required>
        <input type="submit" value="submit">
        </form>
    </div>    
</body>
</html>