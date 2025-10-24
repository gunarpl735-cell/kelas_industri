<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
     use HasFactory;

    protected $fillable = ['id','nama_lengkap','jenis_kelamin','tanggal_lahir','tempat_lahir','agama','alamat','email','id_kelas'];
    public $timestamp = true;

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'id_kelas');
    }
}
