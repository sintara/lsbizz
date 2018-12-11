<?php

namespace App\Filters\Product;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class GraphicFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'nqd' => 'nqd',
            'gtx10' => 'gtx10',
            'gtx9' => 'gtx9',
            'gt' => 'gt',
            'rqd' => 'rqd',
            'rx' => 'rx',
            'r' => 'r',
            'hd' => 'hd',
            'intel' => 'intel',
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null ){
            return $builder;
        }

        return $builder->where('gpu', $value);
    }
}