<?php

namespace App\Filters\Product;

use Illuminate\Http\Request;
use App\Filters\FiltersAbstract;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\Product\{BrandFilter, ProcessorFilter, GraphicFilter, MemoryFilter, StorageFilter, DisplayFilter};

class ProductFilters extends FiltersAbstract
{
    protected $filters = [
        'brand' => BrandFilter::class,
        'cpu' => ProcessorFilter::class,
        'gpu' => GraphicFilter::class,
        'memory' => MemoryFilter::class,
        'storage' => StorageFilter::class,
        'display' => DisplayFilter::class,
    ];

    // public static function mappings()
    // {
    //     return [
    //         'cpu' => [
    //             'ci7' => 'Intel® Core™ i7',
    //             'ci5' => 'Intel® Core™ i5',
    //             'ci3' => 'Intel® Core™ i3',
    //             'c2d' => 'Intel® Core™ 2 Dou',
    //             'cm' => 'Intel® Core™ M',
    //             'pen' => 'Intel® Pentium®',
    //             'cel' => 'Intel® Celeron®',
    //             'ato' => '‎Intel® Atom®',
    //             'amd' => 'AMD',
    //         ],

    //         'gpu' => [
    //             'nqd' => 'GeForce® Quadro Series',
    //             'gtx10' => 'GeForce® GTX 10-Series',
    //             'gtx9' => 'GeForce® GTX 9-Series',
    //             'gt' => 'GeForce® GT Series',
    //             'rqd' => 'Radeon™ Quadro Series',
    //             'rx' => 'Radeon™ RX Series',
    //             'r' => 'Radeon™ R Series',
    //             'hd' => 'Radeon™ HD Series',
    //             'intel' => 'Intel® Series',
    //         ],

    //         'memory' => [
    //             'u4' => 'Under 4GB', 
    //             'u8' => 'Under 8GB', 
    //             '8u' => 'Upper 8GB'
    //         ],

    //         'storage' => [
    //             'h32' => '320GB',
    //             'h50' => '500GB',
    //             'h75' => '750GB',
    //             'h1t' => '1TB & Up',
    //             'ssd' => 'SSD',
    //         ],

    //         'display' => [
    //             'b10' => '10-inch or Under',
    //             'b13' => '11-inch ~ 13-inch',
    //             'b16' => '14-inch ~ 16-inch',
    //             'u17' => '17-inch or Up'
    //         ],

    //     ];
    // }
}

