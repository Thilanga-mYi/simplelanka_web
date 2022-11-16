<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class AdMainCategoriesFilter extends ModelFilter
{
    public function search($value)
    {
        return $this->whereLike('name', $value);
    }
}
