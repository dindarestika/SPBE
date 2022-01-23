<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    use HasFactory;
    protected $table = 'evaluasi';
    protected $fillable =['nama_evaluasi', 'tahun_evaluasi','deskripsi_evaluasi'];

    public function domain()
    {
        return $this->hasMany(Domain::class);
    }

    public function pertanyaan_umum()
    {
        return $this->hasMany(PertanyaanUmum::class);
    }
}
