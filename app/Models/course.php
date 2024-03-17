<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model {
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'title',
        'slug',
        'details',
        'photo',
        'fee',
        'duration',
        'start_date',
        'end_date',
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
