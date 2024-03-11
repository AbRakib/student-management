<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    use HasFactory;
    protected $fillable = [
        'roll',
        'name',
        'nid',
        'father_name',
        'mother_name',
        'address',
        'email',
        'phone',
        'password',
        'photo',
        'gender_id',
        'education_id',
        'refer_id',
        'course_id',
        'total_paid',
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
