<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Period extends Model

{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	protected $fillable = [
		'period',
	];

    public function Claim(){
    	return $this->hasMany(Claim::class);
    }
}
