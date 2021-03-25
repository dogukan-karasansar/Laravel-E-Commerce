<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'cart'
    ];

    public function carts() {
        return $this->belongsTo('\App\Models\Cart', 'cart');
    }
}
