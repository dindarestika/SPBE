<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $table = 'dokumentasi';
    protected $fillable = ['agenda_id', 'notulen', 'surat', 'presensi', 'foto_acara', 'tautan'];

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }
}
