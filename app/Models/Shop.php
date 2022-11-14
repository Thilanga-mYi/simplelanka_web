<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'agent_id',
        'name',
        'city',
        'district_id',
        'address',
        'tel1',
        'tel2',
        'logo',
        'register_type',
        'register_no',
        'registration_document_image',
        'description',
        'status',
    ];
}
