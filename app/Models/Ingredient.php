<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
    public function unit()
    {
        return $this->belongsTo(Product::class);
    }
}
