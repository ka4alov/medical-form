<?php

namespace App;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'view', 
        'age', 
        'date', 
        'doza', 
        'seria', 
        'reakcia', 
        'info'
    ];
   
    public function student(){
        return $this->belongsTo('App\Student', 'user_id', 'id');
    }
}
