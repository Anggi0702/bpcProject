<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];
    public $timestamp = false;

    public function users()
    {
    	$this->hasMany('App\User', 'role_id', 'id');
    }
}
