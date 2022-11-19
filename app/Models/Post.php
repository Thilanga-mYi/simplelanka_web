<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Filterable;

    public static $status = [1 => 'Active', 2 => 'Inactive', 3 => 'Deleted', 4 => 'Pending'];

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

    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => self::$status[$value],
        );  
    }

    public static function getNotDeleted()
    {
        return self::where('status', '!=', 3);
    }

    public function mainCategory()
    {
        return $this->hasOne(AdMainCategories::class,'id','main_category');
    }

    public function subCategory()
    {
        return $this->hasOne(AdSubCategories::class,'id','sub_category');
    }
}
