<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $primarykey = 'peserta_id';
    protected $fillable = ['nama', 'tempat_lahir', 'tgl_lahir', 'alamat', 'program_id', 'no_hp', 'tgl_masuk'];

    public function program()
    {
    	return $this->belongsTo('App\program', 'program_id');
    }
}
