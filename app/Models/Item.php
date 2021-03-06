<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'genres_id',
        'name',
        'price',
        'explanation',
        'profile_photo_path',
    ];

    public function genre() {
        return $this->belongsTo('App\Models\Genre', 'genres_id');
    }

    public function cart_items() {
        return $this->hasMany('App\Models\CartItems');
    }
}