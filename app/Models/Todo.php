<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = "quicknotes_todo"; //manually bring table because class name is different

    protected $fillable = [
        'title',
        'description',
    ];
}
