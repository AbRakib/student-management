<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
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

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'added_by', 'id');
    }
}
