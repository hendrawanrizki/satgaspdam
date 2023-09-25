<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datauser extends Model
{
    use HasFactory;
    protected $table = 'datauser';
    protected $fillable = ['nama_lengkap', 'no_ktp', 'tempat_lahir','tanggal_lahir','jenis_kelamin','status_pernikahan','alamat','telpon','pendidikan_terakhir','agama','sekolah','jurusan','email'];
    public function Lowongan()
    {
        return $this->belongsToMany(Lowongan::class);
    }
    public function filedokumen()
    {
        return $this->belongsToOne(filedokumen::class);
    } 
}

