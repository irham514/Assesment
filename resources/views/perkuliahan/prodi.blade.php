@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Prodi</h1><br>
    <a href="{{ route('perkuliahan.index') }}" class="btn btn-primary"> Home </a>
    <a href="{{ route('prodi.create') }}" class="btn btn-primary"> Tambah Prodi</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Prodi<th>
                <th>Angkatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodis as $prodi)
                <tr>
                    <td>{{ $prodi ->id }}</td>
                    <td>{{ $prodi ->kode }}</td>
                    <td>{{ $prodi ->prodi }}</td>
                    <td>{{ $prodi ->angkatan }}</td>
                    <td>
                        <a href="{{ route('prodi.edit', $prodi->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('prodi.destroy', $prodi->id) }}" method="POST">
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