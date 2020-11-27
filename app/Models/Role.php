<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //1 Role could have multiple User (this links role and user table using "Many-to-many relationship")
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
