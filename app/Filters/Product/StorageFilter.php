<?php

namespace App\Filters\Product;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class StorageFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'h32' => 'h32',
            'h50' => 'h50',
            'h75' => 'h75',
            'h1t' => 'h1t',
            'ssd' => 'ssd',
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null ){
            return $builder;
        }

        return $builder->where('storage', $value);
    }
}