<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dasarhukum extends Model
{
    use HasFactory;
    protected $table = 'dasarhukum';
    protected $fillable =['nama_dasarhukum', 'link_dasarhukum'];

}
