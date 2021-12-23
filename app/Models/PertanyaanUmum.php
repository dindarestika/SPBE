<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PertanyaanUmum extends Model
{
    use HasFactory;
    protected $table = 'pertanyaan_umum';
    protected $fillable =['soal'];
    public function jawaban_umum()
    {
        return $this->hasMany(JawabanUmum::class);
    }
}
