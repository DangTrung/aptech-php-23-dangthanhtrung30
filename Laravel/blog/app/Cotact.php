<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotact extends Model
{
    protected $table = 'cotacts';

    protected $fillable = [
    	'name','email', 'phone', 'cotact', 'status',
    ];
}
