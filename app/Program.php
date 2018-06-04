<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{

	protected $primaryKey = "program_id";
    protected $fillable = ['nama_program', 'pertemuan', 'biaya'];


    public function peserta()
    {
    	return $this->hasMany('App\Peserta', 'peserta_id');
    }
}
