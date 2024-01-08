@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Perkuliahan</h1><br>
    <a href="/mahasiswa" class="btn btn-primary"> Mahasiswa </a>
    <a href="/dosen" class="btn btn-primary">Dosen</a>
    <a href="/prodi" class="btn btn-primary">Prodi</a>
    <a href="/matakuliah" class="btn btn-primary">Mata Kuliah</a>
    <div class="image">
        <div class="image" id="image"><img src="{{ asset('storage/stmik1.jpg') }}" alt="image"></div>
    </div>
    
</div>

@endsection