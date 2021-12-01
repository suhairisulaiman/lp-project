<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }    

    protected $table = 'tbl_permohonan';
    
    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function kategoriPermohonan()
    {
        return $this->hasMany(KategoriPermohonan::class, 'kategori_permohonan_id', 'id');
    }

    public function bayaran()
    {
        return $this->belongsTo(Bayaran::class, 'bayaran_id', 'id');
    }

    public function kokurikulum()
    {
        return $this->hasMany(Kokurikulum::class, 'kokurikulum_id', 'id');
    }

    public function mesyuarat()
    {
        return $this->hasMany(Mesyuarat::class, 'mesyuarat_id', 'id');
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'dokumen_id', 'id');
    }

    public function perniagaan()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id', 'id');
    }

    public function peperiksaan()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id', 'id');
    }
}
