<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_lastname',
        'customer_address',
        'customer_email',
        'customer_phone',
        'total_price',
    ];

    public function dishes() {
        return $this->belongsToMany(Dish::class);
    }
}