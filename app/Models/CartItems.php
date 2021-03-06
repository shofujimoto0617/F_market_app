<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'item_id',
        'quantity',
    ];
    public function item() {
        return $this->belongsTo('App\Models\Item', 'item_id');
    }
    public function customer() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
