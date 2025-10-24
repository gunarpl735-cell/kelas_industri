<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
     use HasFactory;
    protected $fillable = ['id','nama_kelas'];
    public $timestamp = true;

    //relasi ke tabel murid
     public function murid()
    {
        return $this->hasMany(murid::class, 'id_kelas','id');
    }
}
