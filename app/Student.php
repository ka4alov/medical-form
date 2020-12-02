<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'so_name',
        'birthday',
        'adress',    
    ];

    public function info(){
        return $this->hasMany('App\Info', 'user_id', 'id');
    }
}
