<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
		'name', 'code'
	];

    public function Claim(){
    	return $this->hasMany(Claim::class);
    }
}
