<?php

namespace App\Http\ViewComposer;

use Illuminate\View\View;
use App\Filters\Product\ProductFilters;

class ProductFiltersComposer
{
    public function compose(View $view)
    {
        $view->with([
            'mappings' => ProductFilters::mappings()
        ]);
    }
}