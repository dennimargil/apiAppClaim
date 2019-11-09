<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    protected $fillable = [
		'name',
	];

    public function Claim(){
    	return $this->hasMany(Claim::class);
    }
}
