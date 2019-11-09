<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
		'constancy_note', 'note_sheet', 'act_special', 'claim_id',
	];

	public function claim(){
		return $this->belongsTo(claim::class);
	}
}
