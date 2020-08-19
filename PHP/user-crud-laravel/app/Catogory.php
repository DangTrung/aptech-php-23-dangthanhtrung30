<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catogory extends Model
{
    protected $table = 'categories';

    protected $fillable = [
    	'name',
    ];

    public function product()
    {
    	return $this->hasMany('App\Product', 'category_id', 'id');
    }
}
