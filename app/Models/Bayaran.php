<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayaran extends Model
{
    use HasFactory;

    protected $table = 'tbl_bayaran';

    public function permohonan()
    {
        return $this->hasMany(Permohonan::class, 'permohonan_id', 'id');
    }
    
    public function kaedahBayaran()
    {
        return $this->hasMany(KaedahBayaran::class, 'kaedah_bayaran_id', 'id');
    }

}
