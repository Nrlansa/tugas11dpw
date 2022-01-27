<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produk";
    protected $fillable = ['nama','berat','harga','stok','deskripsi','foto'];
    protected $dates = ['created_at'];

    function gethargaAttribute(){
    	return "Rp.".number_format($this->attributes['harga']);
    }


}
