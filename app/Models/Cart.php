<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user', 'cart_data'];

    public function user() {
        return $this->belongsTo('\App\Models\User', 'user');
    }
}
