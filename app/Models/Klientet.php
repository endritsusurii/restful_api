<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klientet extends Model
{
    use HasFactory;

    protected $fillable = [
        'emri',
        'mbiemri',
        'nr_tel',
        'adresa',
        'qyteti',
        'shteti',
    ];

    public function pagesat(){
        return $this->hasOne(Pagesat::class);
    }
    public function porosite(){
        return $this->hasMany(Porosite::class);
    }
}
