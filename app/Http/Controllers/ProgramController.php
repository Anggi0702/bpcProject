<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramController extends Controller
{

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


    public function index()
    {
        $programs = Program::all();
        return view('program.dataProgram', compact('programs'));
    }


    public function edit(Program $program)
    {   
        $programs = Program::all();
        return view('program.editData', compact('program'));
    }


    public function update(Program $program)
        {
            $program->update([
                'name' => request('name'),
                'pertemuan' => request('pertemuan'),
                'biaya' => request('biaya'),
            ]);
            

        return redirect()->route('program.index')->with('info', 'Data berhasil diupdate');


    }


    public function destroy($program_id)
    {
        Program::where('program_id', $program_id)
    	->delete();
    	
    	return redirect()->route('program.index');
    }
}

