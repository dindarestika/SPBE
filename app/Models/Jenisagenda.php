<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenisagenda extends Model
{
    use HasFactory;
    protected $table = 'jenisagenda';
    protected $fillable =['nama_jenis'];

    public function agenda()
    {
        return $this->hasMany(agenda::class);
    }
}
