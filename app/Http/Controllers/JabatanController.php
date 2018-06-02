<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jabatan;

class JabatanController extends Controller
{

    public function index()
    {
    	$jabatans = Jabatan::all();
    	return view('jabatan.dataJabatan', compact('jabatans'));
    }


    public function create()
    {
    	return view('jabatan.tambahData');
    }


    public function store()
    {
    	Jabatan::create([
    		'nama_jabatan' => request('nama_jabatan'),
    	]);

    	return redirect()->route('jabatan.index')->with('info', 'Data berhasil ditambahkan'); 
    }


    public function edit(Jabatan $jabatan)
    {
    	$jabatans = Jabatan::all();
    	return view('jabatan.editData', compact('jabatan'));
    }


    public function update(Jabatan $jabatan)
    {
    	$jabatan->update([
    		'nama_jabatan' => request('nama_jabatan'),
    	]);
    	return redirect()->route('jabatan.index'); 

    }

    public function destroy($jabatan_id)
    {
    	Jabatan::where('jabatan_id', $jabatan_id)
    	->delete();

    	return redirect()->route('jabatan.index')->with('info', 'Data berhasil dihapus'); 

    }
}
