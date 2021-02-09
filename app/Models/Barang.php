<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'data_barang';
    protected $fillable = [
        'nama', 'detail','qr_code'
    ];

}
