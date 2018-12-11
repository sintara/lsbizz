<?php

namespace App;

use App\Filters\Product\ProductFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeFilter(Builder $builder, $request, array $filters = [])
    {
        return (new ProductFilters($request))->add($filters)->filter($builder);
    }
}
