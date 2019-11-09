<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClaimType extends Model
{
    protected $fillable = [
		'type', 'description',
	];

    public function Claim(){
    	return $this->hasMany(Claim::class);
    }
}
