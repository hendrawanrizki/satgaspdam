<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filedokumen extends Model
{
    protected $table = 'filedokumen';
    protected $fillable = [
        'cv',
        'ktp',
        'kk',
        'npwp',
        'bpjs',
        'skck',
        'surat_sehat',
        'foto',
        'ijazah',
        'sertifikat',
        'datauser_id',
    ];
    use HasFactory;
    public function Datauser()
    {
        return $this->belongsTo(Datauser::class);
    } 
}
