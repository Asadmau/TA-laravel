<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    protected $table = 'mk_subcategories';
    protected $fillable = ['kodeKategori','namaSubKategori'];
    public $incrementing = false;
    protected $primaryKey = 'kodeKategori';
    public $timestamps = false;
}
