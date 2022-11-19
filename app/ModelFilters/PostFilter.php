<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class PostFilter extends ModelFilter
{
    public function search($value)
    {
        return $this->whereLike('title', $value);
    }
}
