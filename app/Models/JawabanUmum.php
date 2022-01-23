<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanUmum extends Model
{
    use HasFactory;
    protected $table = 'jawaban_umum';
    protected $fillable =['user_id', 'pertanyaan_umum_id','jawaban'];
    public function pertanyaan_umum()
    {
        return $this->belongsTo(PertanyaanUmum::class);
    }
}
