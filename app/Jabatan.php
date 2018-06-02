<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
	protected $primaryKey ='jabatan_id';
    protected $fillable = ['nama_jabatan'];

    public function karyawan()
    {
    	return $this->hasMany('App\Karyawan');
    }
}
