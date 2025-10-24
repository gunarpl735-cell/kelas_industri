<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_barang','merek','harga','stok'];
    public $timestamp = true;

    //relasi ke tabel murid
     public function Transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_barang','id');
    }
}
