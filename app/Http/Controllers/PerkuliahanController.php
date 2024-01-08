<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\dosen;
use App\Models\matakuliah;
use App\Models\prodi;
use Illuminate\Http\Request;

class PerkuliahanController extends Controller
{
    public function index(){
        return view('perkuliahan.index',);
    }

    // MAHASISWA
    public function mahasiswa(){
        $mahasiswas = mahasiswa::all();
        return view('perkuliahan.mahasiswa', compact('mahasiswas'));
    }

    public function create(){
        return view('perkuliahan.create' );
    }

    public function store(Request $request){
        $request -> validate([
            'nama'          => 'required|string|max:255',
            'nim'           => 'required|string|max:255',
            'prodi'         => 'required|string|max:15',
        ]);
        mahasiswa::create([
            'nama'          => $request->input('nama'),
            'nim'           => $request->input('nim'),
            'prodi'         => $request->input('prodi')
        ]);
        return redirect()->route('perkuliahan.mahasiswa')->with('success', 'Data mahasiswa berhasil disimpan');
    }

    public function mahasiswa_edit($id){
        $mahasiswas = mahasiswa::find($id);
        return view('perkuliahan.mahasiswa_edit', compact('mahasiswas'));
    }

    public function mahasiswa_update(Request $request, $id){
        $request->validate([
            'nama'          => 'required|string|max:255',
            'nim'           => 'required|string|max:255',
            'prodi'         => 'required|string|max:15',
        ]);
        $mahasiswas = mahasiswa::find($id);
        $mahasiswas->nama = $request->input('nama');
        $mahasiswas->nim = $request->input('nim');
        $mahasiswas->prodi = $request->input('prodi');
        $mahasiswas->save();
        return redirect()->route('perkuliahan.mahasiswa')->with('success', 'Data mahasiswa berhasil di perbarui.');
    }

    public function mahasiswa_destroy($id){
        $mahasiswas = mahasiswa::find($id);
        if ($mahasiswas) {
            $mahasiswas->delete();
            return redirect()->route('perkuliahan.mahasiswa')->with('success', 'Data mahasiswa berhasil di hapus.');
        }else {
            return redirect()->route('perkuliahan.mahasiswa')->with('success', 'Data mahasiswa tidak ditemukan');
        }
    }

    //DOSEN
    public function dosen(){
        $dosens = dosen::all();
        return view('perkuliahan.dosen', compact('dosens'));
    }

    public function dosen_create(){
        return view('perkuliahan.dosen_create' );
    }

    public function dosen_store(Request $request){
        $request -> validate([
            'nama'          => 'required|string|max:255',
            'nip'           => 'required|string|max:255',
            'jabatan'         => 'required|string|max:15',
        ]);
        dosen::create([
            'nama'          => $request->input('nama'),
            'nip'           => $request->input('nip'),
            'jabatan'       => $request->input('jabatan')
        ]);
        return redirect()->route('perkuliahan.dosen')->with('success', 'Data dosen berhasil disimpan');
    }

    public function dosen_edit($id){
        $dosens = dosen::find($id);
        return view('perkuliahan.dosen_edit', compact('dosens'));
    }

    public function dosen_update(Request $request, $id){
        $request->validate([
            'nama'          => 'required|string|max:255',
            'nip'           => 'required|string|max:255',
            'jabatan'       => 'required|string|max:15',
        ]);
        $dosens = dosen::find($id);
        $dosens->nama = $request->input('nama');
        $dosens->nip = $request->input('nip');
        $dosens->jabatan = $request->input('jabatan');
        $dosens->save();
        return redirect()->route('perkuliahan.dosen')->with('success', 'Data dosen berhasil di perbarui.');
    }

    public function dosen_destroy($id){
        $dosens = dosen::find($id);
        if ($dosens) {
            $dosens->delete();
            return redirect()->route('perkuliahan.dosen')->with('success', 'Data dosen berhasil di hapus.');
        }else {
            return redirect()->route('perkuliahan.dosen')->with('success', 'Data dosen tidak ditemukan');
        }
    }

    //MATAKULIAH
    public function matakuliah(){
        $matakuliahs = matakuliah::all();
        return view('perkuliahan.matakuliah', compact('matakuliahs'));
    }

    public function matakuliah_create(){
        return view('perkuliahan.matakuliah_create' );
    }

    public function matakuliah_store(Request $request){
        $request -> validate([
            'kode'          => 'required|string|max:255',
            'matakuliah'    => 'required|string|max:255',
            'dosen'         => 'required|string|max:15',
            'ruangan'       => 'required|string|max:15',
            
        ]);
        matakuliah::create([
            'kode'          => $request->input('kode'),
            'matakuliah'    => $request->input('matakuliah'),
            'dosen'         => $request->input('dosen'),
            'ruangan'       => $request->input('ruangan')
        ]);
        return redirect()->route('perkuliahan.matakuliah')->with('success', 'Data matakuliah berhasil disimpan');
    }

    public function matakuliah_edit($id){
        $matakuliahs = matakuliah::find($id);
        return view('perkuliahan.matakuliah_edit', compact('matakuliahs'));
    }

    public function matakuliah_update(Request $request, $id){
        $request->validate([
            'kode'          => 'required|string|max:255',
            'matakuliah'    => 'required|string|max:255',
            'dosen'         => 'required|string|max:15',
            'ruangan'       => 'required|string|max:15',
        ]);
        $matakuliahs = matakuliah::find($id);
        $matakuliahs->kode = $request->input('kode');
        $matakuliahs->matakuliah = $request->input('matakuliah');
        $matakuliahs->dosen = $request->input('dosen');
        $matakuliahs->ruangan = $request->input('ruangan');
        $matakuliahs->save();
        return redirect()->route('perkuliahan.matakuliah')->with('success', 'Data matakuliah berhasil di perbarui.');
    }

    public function matakuliah_destroy($id){
        $matakuliahs = matakuliah::find($id);
        if ($matakuliahs) {
            $matakuliahs->delete();
            return redirect()->route('perkuliahan.matakuliah')->with('success', 'Data matakuliah berhasil di hapus.');
        }else {
            return redirect()->route('perkuliahan.matakuliah')->with('success', 'Data matakuliah tidak ditemukan');
        }
    }

    //PRODI
    public function prodi(){
        $prodis = prodi::all();
        return view('perkuliahan.prodi', compact('prodis'));
    }

    public function prodi_create(){
        return view('perkuliahan.prodi_create' );
    }

    public function prodi_store(Request $request){
        $request -> validate([
            'kode'          => 'required|string|max:255',
            'prodi'         => 'required|string|max:255',
            'angkatan'      => 'required|string|max:15'
            
        ]);
        prodi::create([
            'kode'          => $request->input('kode'),
            'prodi'         => $request->input('prodi'),
            'angkatan'      => $request->input('angkatan')
        ]);
        return redirect()->route('perkuliahan.prodi')->with('success', 'Data prodi berhasil disimpan');
    }

    public function prodi_edit($id){
        $prodis = prodi::find($id);
        return view('perkuliahan.prodi_edit', compact('prodis'));
    }

    public function prodi_update(Request $request, $id){
        $request->validate([
            'kode'          => 'required|string|max:255',
            'prodi'         => 'required|string|max:255',
            'angkatan'      => 'required|string|max:15'
        ]);
        $prodis = prodi::find($id);
        $prodis->kode = $request->input('kode');
        $prodis->prodi = $request->input('prodi');
        $prodis->angkatan = $request->input('angkatan');
        $prodis->save();
        return redirect()->route('perkuliahan.prodi')->with('success', 'Data prodi berhasil di perbarui.');
    }

    public function prodi_destroy($id){
        $prodis = prodi::find($id);
        if ($prodis) {
            $prodis->delete();
            return redirect()->route('perkuliahan.prodi')->with('success', 'Data prodi berhasil di hapus.');
        }else {
            return redirect()->route('perkuliahan.prodi')->with('success', 'Data prodi tidak ditemukan');
        }
    }

}
