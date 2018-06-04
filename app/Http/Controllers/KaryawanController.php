<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Jabatan;

class KaryawanController extends Controller
{
	public function __construct()
    {
    	$this->middleware('web');
    }


    public function index()
    {
        $jabatans = Jabatan::all();
        $karyawans =Karyawan::all();
    	return view('karyawan.dataKaryawan', compact('karyawans', 'jabatans'));
    }


    public function create()
    {
        $jabatans = Jabatan::all();
    	return view('karyawan.tambahData', compact('jabatans'));
    }

    
    public function store()
    {
        Karyawan::create([
            'nama_karyawan' => request('nama_karyawan'),
            'jabatan_id' => request('jabatan_id'),
            'tempat_lahir' => request('tempat_lahir'),
            'tgl_lahir' => request('tgl_lahir'),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
        ]);

        return redirect()->route('karyawan.index')->with('info', 'Data berhasil dibuat');
    }


    public function edit(Karyawan $karyawan)
    {
        $jabatans = Jabatan::all();
        $karyawans =Karyawan::all();   
        return view('karyawan.editData', compact('karyawan', 'jabatans'));
    }

    public function update(Karyawan $karyawan)
    {
        $karyawan->update([
            'nama_karyawan' => request('nama_karyawan'),
            'jabatan_id' => request('jabatan_id'),
            'tempat_lahir' => request('tempat_lahir'),
            'tgl_lahir' => request('tgl_lahir'),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
        ]);

        return redirect()->route('karyawan.index')->with('info', 'Data berhasil diubah');
    }


    public function destroy($karyawan_id)
    {
        Karyawan::where('karyawan_id', $karyawan_id)
        ->delete();

        return redirect()->route('karyawan.index')->with('info', 'Data berhasil dihapus'); 

    }

    public function detail(Karyawan $karyawan)
    {
        $karyawans = Karyawan::all();
        $jabatans = Jabatan::all();
        return view('karyawan.detail', compact('karyawan', 'jabatans'));
    }
}
