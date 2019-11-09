<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
protected $fillable = [
		'status', 'claimtype_id', 'people_id', 'user_id', 'subject_id', 'section_id', 'period_id',
	];

	public function Resource(){
		return $this->hasOne(Resource::class);
	}

    public function People(){
    	return $this->belongsTo(People::class);
    }

    public function User(){
    	return $this->belongsTo(User::class);
    }    

    public function ClaimType(){
    	return $this->belongsTo(ClaimType::class);
    }

    public function Subject(){
    	return $this->belongsTo(Subject::class);
    }

    public function Section(){
    	return $this->belongsTo(Section::class);
    }

     public function Period(){
    	return $this->belongsTo(Period::class);
    }

     public function Department(){
    	return $this->belongsToMany(Department::class);
    }
}
