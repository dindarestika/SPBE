<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    use HasFactory;
    protected $table = 'indikator';
    protected $fillable =['aspek_id', 'nama_indikator', 'bobot_indikator', 'penjelasan_indikator'];

    public function aspek()
    {
        return $this->belongsTo(Aspek::class);
    }
    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}
