<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name','email','password' ];
    public function phone()
    {
        return $this->hasOne('App\Phone');
        
    }
}
