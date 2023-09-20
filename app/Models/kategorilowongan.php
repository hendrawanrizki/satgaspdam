<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategorilowongan extends Model
{
    use HasFactory;
    protected $table = 'kategorilowongan';
    protected $fillable = ['nama_kategori'];
    public function Datauser()
    {
        return $this->belongsToMany(Datauser::class);
    } 

}
