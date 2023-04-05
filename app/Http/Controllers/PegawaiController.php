<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fungsi eloquent menampilkan data menggunakan pagination
        $pegawais = Pegawai::paginate(5); // Mengambil semua isi tabel
        $posts = Pegawai::orderBy('Nip', 'desc')->paginate(6);
        return view('pegawais.index', compact('pegawais'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('pegawais.create');
    }
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'Nip' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jabatan' => 'required',
            'Gaji_Pokok' => 'required',
        ]);
        //fungsi eloquent untuk menambah data
        Pegawai::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('pegawais.index')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }
    public function show($Nip)
    {
        //menampilkan detail data dengan menemukan/berdasarkan Nim Mahasiswa
        $Pegawai = Pegawai::find($Nip);
        return view('pegawais.detail', compact('Pegawai'));
    }
    public function edit($Nip)
    {
        //menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Pegawai = Pegawai::find($Nip);
        return view('pegawais.edit', compact('Pegawai'));
    }
    public function update(Request $request, $Nip)
    {
        //melakukan validasi data
        $request->validate([
            'Nip' => 'required',
            'Nama' => 'required',
            'Alamat' => 'required',
            'Jabatan' => 'required',
            'Gaji_Pokok' => 'required',
        ]);
        //fungsi eloquent untuk mengupdate data inputan kita
        Pegawai::find($Nip)->update($request->all());
        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('pegawais.index')
            ->with('success', 'Mahasiswa Berhasil Diupdate');
    }
    public function destroy($Nip)
    {
        //fungsi eloquent untuk menghapus data
        Pegawai::find($Nip)->delete();
        return redirect()->route('pegawais.index')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }

     // Funsi Search bar
     public function search(Request $request)
     {
         $keyword = $request->search;
         $pegawais = Pegawai::where('Nama', 'like', '%' . $keyword . '%')->paginate(5);
         return view('pegawais.index', compact('pegawais'))->with('i', (request()->input('page', 1) - 1) * 5);
     }
     // Fungsi Search bar End
}
