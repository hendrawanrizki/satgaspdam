<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pilihlowongan extends Model
{
    use HasFactory;
    protected $table = 'pilihlowongan';
    protected $fillable = ['status','datauser_id','lowongan_id'];
    public function jadwalseleksi()
    {
        return $this->belongsToMany(jadwalseleksi::class);
    } 
    public function hasilseleksi()
    {
        return $this->belongsToMany(hasilseleksi::class);
    } 
}
