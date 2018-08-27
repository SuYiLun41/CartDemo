<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductClass extends Model
{
    protected $table = 'product_class';

    protected $fillable = ['name'];

    public $timestamps = false;

    public function Products(){
        return $this->hasMany('App\Product','class_id');
    }
}
