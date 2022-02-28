<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $fillable = ['nom', 'description', 'prix', 'slug', 'image', 'release_at', 'cdc', 'colorist', 'promotion'];

    public function produit()
    {
        return $this->belongsTo(Products::class);
    }
}
