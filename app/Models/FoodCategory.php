<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    use HasFactory;

    protected $table = "food_categories"; //manually bring table because class name is different
    //1 Food categories could have unlimited food items (This link food_item to good_category table with "One-to-many" relations)

    protected $fillable = [
        'title',
        'description',
        'image_url'
    ];

    public function food_items()
    {

        return $this->hasMany('App\Models\FoodItem', 'category_id');
    }
}
