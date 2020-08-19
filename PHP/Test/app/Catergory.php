<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catergory extends Model
{
    protected $table= 'catergories';
    protected $fillable = ['name'];
    public function product()
    {
        return $this->hasMany('App\Product','category_id');
    }
}
