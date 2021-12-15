<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produktet extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_detajet_e_produkteve',
        'emri_produktit',
        'pershkrimi_i_produktit',
        'sasia_ne_stok',
        'cmimi',
    ];

    public function detajet_e_produkteve() {
        return $this->hasMany(Detajet_e_produkteve::class);
    }
    public function detajet_e_porosise(){
        return $this->belongsTo(Detajet_e_porosise::class);
    }
}
