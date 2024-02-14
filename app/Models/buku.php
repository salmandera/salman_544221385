<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    public $timestamps = true;
    protected $table = "buku";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama',
        'kode_buku',
        'harga_buku',
    ];
    use HasFactory;
}
