<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'mk_categories';
    protected $fillable = ['kodeKategori','namaKategori'];
    public $incrementing = false;
    protected $primaryKey = 'kodeKategori';
    public $timestamps = false;
}
