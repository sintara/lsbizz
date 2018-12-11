<?php

namespace App\Filters\Product;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class BrandFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'apple' => 'apple',
            'acer' => 'acer',
            'alienware' => 'alienware',
            'asus' => 'asus',
            'dell' => 'dell',
            'hp' => 'hp',
            'lenovo' => 'lenovo',
            'microsoft' => 'microsoft',
            'msi' => 'msi',
            'predator' => 'predator',
            'razer' => 'razer',
            'rog' => 'rog',
            'samsung' => 'samsung',
            'sony' => 'song',
            'toshiba' => 'toshiba',
            'other' => 'other',
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if($value === null ){
            return $builder;
        }

        return $builder->where('brand', $value);
    }
}