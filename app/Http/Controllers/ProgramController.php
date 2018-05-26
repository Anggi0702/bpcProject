<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{
	public function index()
    {
    	$programs = Program::all();
    	return view('program.dataProgram', compact('programs'));
    }

    public function create()
    {
    	return view('program.tambahData');
    }

    public function store()
    {
    	Program::create([
    		'name' => request('name'),
    		'pertemuan' => request('pertemuan'),
    		'biaya' => request('biaya'),
    	]);

    	return redirect()->route('program.index');
    }

    public function destroy(Program $program)
    {
    	$program->delete();
    	
    	return redirect()->route('program.index');
    }
}

