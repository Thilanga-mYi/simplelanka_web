<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdSubCategories extends Model
{
    use HasFactory;
    use Filterable;

    public static $status = [1 => 'Active', 2 => 'Inactive', 3 => 'Deleted'];

    protected $fillable = ['main_category_id', 'name', 'image', 'slug'];

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
        return $this->hasOne(AdMainCategories::class,'id','main_category_id');
    }
}
