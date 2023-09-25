<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $table = 'lowongan';
    protected $fillable = ['judul_lowongan', 'deskripsi_lowongan', 'tanggal_mulai','tanggal_akhir','penempatan','kategori_lowongan', 'posisi_jabatan', 'jenis_kelamin','pendidikan','jurusan','syarat_dokumen','keterangan','file'];
    public function Datauser()
    {
        return $this->belongsToMany(Datauser::class);
    } 
    public function kategorilowongan()
    {
        return $this->belongsTo(kategorilowongan::class);
    } 
}
