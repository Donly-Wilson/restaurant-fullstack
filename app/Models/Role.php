<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //1 Role could have multiple User (Link role and user table)
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
