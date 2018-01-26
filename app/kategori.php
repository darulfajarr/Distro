<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
     protected $fillable = ['id','nama_kategori'];
 public function product(){
    	return $this->hasMany('App\Product');
    }
}