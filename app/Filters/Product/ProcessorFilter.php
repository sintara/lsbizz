<?php

namespace App\Filters\Product;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class ProcessorFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'ci7' => 'ci7',
            'ci5' => 'ci5',
            'ci3' => 'ci3',
            'c2d' => 'c2d',
            'cm' => 'cm',
            'pen' => 'pen',
            'cel' => 'cel',
            'amd' => 'amd',
            'ato' => 'ato'
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null ){
            return $builder;
        }

        return $builder->where('cpu', $value);
    }
}