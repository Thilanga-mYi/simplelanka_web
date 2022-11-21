<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class AdSubCategoriesFilter extends ModelFilter
{
    public function search($value)
    {
        return $this->whereLike('name', $value);
    }
}