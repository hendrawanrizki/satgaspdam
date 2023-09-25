<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalseleksi extends Model
{
    use HasFactory;
    protected $table = 'jadwalseleksi';
    protected $fillable = ['nama_pengumuman', 'deskripsi', 'tanggal_seleksi','lokasi_seleksi','pilihlowongan_id'];
    public function pilihlowongan()
    {
        return $this->belongsToOne(pilihlowongan::class);
    }
  
}
