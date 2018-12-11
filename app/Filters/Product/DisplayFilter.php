<?php

namespace App\Filters\Product;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class DisplayFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'b10' => 'b10',
            'b13' => 'b13',
            'b16' => 'b16',
            'u17' => 'u17',
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null ){
            return $builder;
        }

        return $builder->where('display', $value);
    }
}