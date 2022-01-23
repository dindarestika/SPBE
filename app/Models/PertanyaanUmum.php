<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanUmum extends Model
{
    use HasFactory;
    protected $table = 'pertanyaan_umum';
    protected $fillable = ['evaluasi_id', 'opd_id', 'soal'];
    public function jawaban_umum()
    {
        return $this->hasMany(JawabanUmum::class);
    }
    public function evaluasi()
    {
        return $this->belongsTo(Evaluasi::class, 'evaluasi_id', 'id');
    }
}
