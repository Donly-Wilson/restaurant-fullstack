<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $table = "food_items";
    // Get the food category that owns the food item.(link the food items to food category,inverse of "one-to-one" relationship)
    public function food_category()
    {
        return $this->belongsTo('App\Models\FoodCategory');
    }
}
