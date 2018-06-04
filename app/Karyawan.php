<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $primaryKey = 'karyawan_id';
    protected $fillable =['jabatan_id', 'nama_karyawan', 'tempat_lahir', 'tgl_lahir', 'alamat', 'no_hp'];

    public function jabatan()
    {
    	return $this->belongsTo('App\Jabatan', 'jabatan_id');
    }
}
