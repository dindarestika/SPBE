<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $table = 'jawaban';
    protected $fillable =['user_id', 'pertanyaan_id','jawaban_pertanyaan', 'bukti_dukung', 'capaian'];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }
}
