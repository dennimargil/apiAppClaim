<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
		'dni', 'name', 'lastname', 'phone', 'email', 'direction',
	];

    public function User(){
    	return $this->belongsTo(User::class);
    }

    public function Claims(){
    	return $this->hasMany(Claim::class);
    }
}
