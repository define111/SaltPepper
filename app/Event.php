<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Table Name
    protected $table = 'events';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    //Create a relationship between Users and Events
    public function user(){
      return $this->belongsTo('App\User');
    }
    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
     protected $dates = [
         'date'
     ];
}
