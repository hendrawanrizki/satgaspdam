<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    use HasFactory;
    protected $fillable = ['judul_lowongan', 'deskripsi_lowongan', 'tanggal_mulai','tanggal_akhir','penempatan'];
    public function Datauser()
    {
        return $this->belongsToMany(Datauser::class);
    }
}
