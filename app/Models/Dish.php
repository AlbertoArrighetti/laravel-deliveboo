<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'viewable', 'image'];

    // foreign
    public function restaurants() {
        return $this->belongsTo(Restaurant::class);
    }

}
