<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspek extends Model
{
    use HasFactory;
    protected $table = 'aspek';
    protected $fillable =['domain_id', 'nama_aspek', 'bobot_aspek'];

    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }
    public function indikator()
    {
        return $this->hasMany(Indikator::class);
    }
    public function pertanyaan()
    {
        return $this->hasManyThrough(Pertanyaan::class, Indikator::class);
    }
}
