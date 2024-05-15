<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'viewable', 'image', 'restaurant_id'];

    // foreign
    public function restaurants() {
        return $this->belongsTo(Restaurant::class);
    }

}
