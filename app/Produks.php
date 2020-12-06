<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produks extends Model
{
    protected $fillable = ['nama_produk','keterangan','harga','jumlah'];
    protected $table = 'produk';
}
