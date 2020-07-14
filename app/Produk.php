<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['cat_id','sub_cat_id','nama_produk','deskripsi_produk','harga','jumlah','ditampilkan','status']; 
    public $incrementing = false;
}
