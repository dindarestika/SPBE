<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;
    protected $table = 'opd';
    protected $fillable =['nama_opd', 'email_opd', 'telepon_opd', 'alamat_opd'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
