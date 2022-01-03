<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masterplan extends Model
{
    use HasFactory;
    protected $table = 'masterplan';
    protected $fillable =['nama_masterplan', 'link_masterplan'];

}
