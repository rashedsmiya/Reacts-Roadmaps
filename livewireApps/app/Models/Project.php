<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use softDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'deadline',
        'project_logo',
    ];
}
