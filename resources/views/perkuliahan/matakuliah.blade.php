@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Matakuliah</h1><br>
    <a href="{{ route('perkuliahan.index') }}" class="btn btn-primary"> Home </a>
    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary"> Tambah Matakuliah</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Matakuliah<th>
                <th>Dosen</th>
                <th>Ruangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $matakuliah ->id }}</td>
                    <td>{{ $matakuliah ->kode }}</td>
                    <td>{{ $matakuliah ->matakuliah }}</td>
                    <td>{{ $matakuliah ->dosen }}</td>
                    <td>{{ $matakuliah ->Ruangan }}</td>
                    <td>
                        <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection