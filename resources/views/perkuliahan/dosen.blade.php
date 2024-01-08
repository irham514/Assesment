@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Dosen</h1><br>
    <a href="{{ route('perkuliahan.index') }}" class="btn btn-primary"> Home </a>
    <a href="{{ route('dosen.create') }}" class="btn btn-primary"> Tambah Dosen</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIP<th>
                <th>Jabatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $dosen)
                <tr>
                    <td>{{ $dosen ->id }}</td>
                    <td>{{ $dosen ->nama }}</td>
                    <td>{{ $dosen ->nip }}</td>
                    <td>{{ $dosen ->jabatan }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST">
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