<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    use Filterable;

    public static $status = [1 => 'Active', 2 => 'Inactive', 3 => 'Deleted', 4 => 'Pending'];

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
}
