<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolah;

class sekolahController extends Controller
{
    public function index()
    {
        return view('sekolahs.index', [
            'sekolahs' => sekolah::get(),
        ]);
    }
public function tambah()

{
    return view('sekolahs.tambah');
}

public function simpan(Request $request)

{
    $sekolah = new Sekolah();

    $sekolah->nama = $request->nama;
    $sekolah->alamat = $request->alamat;
    $sekolah->jurusan = $request->jurusan;
    $sekolah->jumlah_guru = $request->jumlah_guru;

    $sekolah->save();

    return redirect()->back();
    
}
public function edit($id)
{
    $sekolah = sekolah::find($id);
    return view('sekolahs.edit',[
        'sekolah'=> $sekolah,
    ]);
}
public function update(Request $request, $id)
{
    $sekolah = sekolah::find($id);

    $sekolah->nama = $request->nama;
    $sekolah->alamat = $request->alamat;
    $sekolah->jurusan = $request->jurusan;
    $sekolah->jumlah_guru = $request->jumlah_guru;

    $sekolah->save();

    return redirect()->back();
    
}
public function destroy($id)
{
    $sekolah = Sekolah::find($id);

    $sekolah->delete();

    return redirect()->route('sekolahs.index');
}
}
