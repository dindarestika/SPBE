<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $table = 'indikator';
    protected $fillable = ['opd_id', 'aspek_id', 'no_indikator', 'nama_indikator', 'bobot_indikator', 'penjelasan_indikator'];

    public function aspek()
    {
        return $this->belongsTo(Aspek::class);
    }
    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }
    public function opd()
    {
        return $this->hasMany(Opd::class);
    }
    public function jawaban()
    {
        return $this->hasManyThrough(Jawaban::class, Pertanyaan::class);
    }
}
