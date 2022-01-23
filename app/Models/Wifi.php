<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wifi extends Model
{
    use HasFactory;
    protected $table = 'wifi';
    protected $fillable =['nama_wifi', 'alamat_wifi', 'latitude', 'longitude'];

    public function allData(){
        $results = Wifi::all();
        return $results;
    }

    public function getLokasi($id)
    {
        $results = Wifi::find($id);
        return $results;
    }
}
