<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $fillable = ['title', 'slug', 'description'];
}
