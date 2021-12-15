<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detajet_e_produkteve extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
    ];

    public function produktet() {
        return $this->belongsTo(Produktet::class);
    }
}
