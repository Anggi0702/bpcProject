<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Peserta;

class PesertaController extends Controller
{
	public function __construct()
    {
    	$this->middleware('web');
    }

    public function index()
    {
    	$pesertas = Peserta::all();
    	$programs = Program::all();
    	return view('peserta.dataPeserta', compact('pesertas', 'programs'));
    }


    public function create(Program $programs)
    {
    	$programs = Program::all();
    	return view('peserta.tambahData', compact('programs'));
    }


    public function store()
    {
    	Peserta::create([
    		'nama' => request('nama'),
    		'tempat_lahir' => request('tempat_lahir'),
    		'tgl_lahir' => request('tgl_lahir'),
    		'alamat' => request('alamat'),
    		'program_id' => request('program_id'),
    		'no_hp' => request('no_hp'),
    		'tgl_masuk' => request('tgl_masuk'),

    	]);
    	return redirect()->route('peserta.index');
    }


    public function edit(Peserta $peserta)
    {
    	$pesertas = Peserta::all();
    	$programs = Program::all();
    	return view('peserta.editData', compact('peserta', 'programs', 'pesertas'));
    }


    public function update(Peserta $peserta)
    {
    	$peserta->update([
    		'nama' => request('nama'),
    		'tempat_lahir' => request('tempat_lahir'),
    		'tgl_lahir' => request('tgl_lahir'),
    		'alamat' => request('alamat'),
    		'program_id' => request('program_id'),
    		'no_hp' => request('no_hp'),
    		'tgl_masuk' => request('tgl_masuk'),
    	]);

    	return redirect()->route('peserta.index');
    }


    public function destroy($peserta_id)
    {
        Peserta::where('peserta_id', $peserta_id)
        ->delete();

        return redirect()->route('peserta.index')->with('info', 'Data berhasil dihapus'); 

    }
}
