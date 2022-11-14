<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static $status = [1 => 'Active', 2 => 'Pending', 3 => 'Deleted'];

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

    public static function getActive()
    {
        return self::where('status', 1);
    }

    public static function getPending()
    {
        return self::where('status', 2);
    }

    public static function getDeleted()
    {
        return self::where('status', 3);
    }

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Post::$status[$value],
        );
    }
}
