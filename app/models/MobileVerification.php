<?php

class MobileVerification extends Eloquent{
	protected $table = 'mobileverification';
        
      public function User()
    {
        return $this->belongsTo('user');
    }
       
}
