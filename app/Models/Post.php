<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'main_category',
        'sub_category',
        'regular_price',
        'sale_price',
        'price_condition',
        'ad_type',
        'product_condition',
        'description',
        'avg_rating',
        'avg_views',
        'avg_clicks',
        'status',
    ];
}
