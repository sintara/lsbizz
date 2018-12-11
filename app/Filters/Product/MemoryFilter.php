<?php

namespace App\Filters\Product;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class MemoryFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'u4' => 'u4',
            'u8' => 'u8',
            '8u' => '8u',
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null ){
            return $builder;
        }

        return $builder->where('memory', $value);
    }
}