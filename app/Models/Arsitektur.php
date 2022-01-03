<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsitektur extends Model
{
    use HasFactory;
    protected $table = 'arsitektur';
    protected $fillable =['nama_arsitektur', 'file_arsitektur'];

}
