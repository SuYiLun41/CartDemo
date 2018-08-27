<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name','img_url','price','class_id'];

    public function getClass(){
        return $this->belongsTo('App\ProductClass','class_id');
    }
}
