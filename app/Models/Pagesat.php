<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagesat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_klientit',
        'data_pageses',
        'shuma',
    ];

    public function klientet(){
        return $this->belongsTo(Klientet::class);
    }
}
