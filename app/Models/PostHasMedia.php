<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostHasMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'media_id',
        'media_type',
        'status',
    ];
}
