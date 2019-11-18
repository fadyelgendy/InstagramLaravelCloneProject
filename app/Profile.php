<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	// to fetch user profile
    public function user (){
    	return $this->belongsTo(User::class);
    }
}
