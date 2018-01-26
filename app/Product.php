<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','kategori_id','nama_product','bahan','ukuran','warna','cover'];

public function kategori(){
    	return $this->belongsTo('App\kategori');
    }         

}



