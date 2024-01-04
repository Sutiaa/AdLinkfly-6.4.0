<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public $table = 'transaksi';
    protected $primarykey = 'id';
    protected $fillable = [
        'total',
        'bayar',
        'tipe_bayar',
        'kembali',
        'created_at',
    ];
}
