<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    // protected $primaryKey = "Genre_id";

    public function item() {
        return $this->hasMany('App\Models\Item');
    }
}
