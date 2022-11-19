<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ShopFilter extends ModelFilter
{
    public function search($value)
    {
        return $this->whereLike('name', $value);
    }
}
