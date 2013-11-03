<?php 

use Eloquent;
use LaravelBook\Ardent\Ardent; 

class Chord extends Song { 
	
	public function song { 
		this->belongsTo('Song');
	} 
	
} 