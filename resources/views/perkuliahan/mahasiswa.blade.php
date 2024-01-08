@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Mahasiswa</h1><br>
    <a href="{{ route('perkuliahan.index') }}" class="btn btn-primary"> Home </a>
    <a href="{{ route('perkuliahan.create') }}" class="btn btn-primary"> Tambah Mahasiswa</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM<th>
                <th>Prodi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa ->id }}</td>
                    <td>{{ $mahasiswa ->nama }}</td>
                    <td>{{ $mahasiswa ->nim }}</td>
                    <td>{{ $mahasiswa ->prodi }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
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