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
        <h1>Matakuliah</h1>
    
        <form action="{{ route('matakuliah.store') }}" method="POST">
        {{ csrf_field() }}
        Kode: <input type="text" name="kode" required><br>
        Matakuliah: <input type="text" name="matakuliah" required><br>
        Dosen: <input type="text" name="dosen" required><br>
        Ruangan: <input type="text" name="ruangan" required>
        <input type="submit" value="submit">
        </form>
    </div>    
</body>
</html>