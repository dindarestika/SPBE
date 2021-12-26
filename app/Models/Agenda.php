<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $table = 'agenda';
    protected $fillable =['jenisagenda_id', 'nama_acara', 'perihal', 'tanggal_acara','waktu_acara', 'tempat_acara', 'link_upload','surat'];

    public function jenisagenda()
    {
        return $this->belongsTo(jenisagenda::class);
    }

    public function dokumentasi()
    {
        return $this->hasMany(Dokumentasi::class);
    }
}
