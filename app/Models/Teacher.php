<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'photo',
        'address',
        'added_ip',
        'updated_ip',
        'added_by',
        'updated_by',
        'created_at',
        'updated_at',
        'deleted',
        'views',
        'status',
    ];
}
