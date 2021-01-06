<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $table = "food_items"; //manually bring table because class name is different
    // Get the food category that owns the food item.(link the food items to food category,inverse of "one-to-one" relationship)
    protected $fillable = [
        'title',
        'description',
        'image_url',
        'price',
        'category_id',
    ];

    public function categories()
    {
        return $this->belongsTo('App\Models\FoodCategory');
    }
}
