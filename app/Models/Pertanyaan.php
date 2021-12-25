<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;
    protected $table = 'pertanyaan';
    protected $fillable =['indikator_id', 'tingkat', 'kriteria', 'jawaban', 'bukti_dukung', 'capaian'];
    public function indikator()
    {
        return $this->belongsTo(Indikator::class);
    }
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class);
    }

}
