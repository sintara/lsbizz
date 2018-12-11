
<div class="line-break-bg"></div>
{{-- Product Filter LOGO --}}
<div class="row product-filter-bg">
    <div class="col-md-12">

    </div>
</div>
<div class="row product-filter-body">
    <div class="d-none d-md-block col-md-3 co-lg-3 col-xl-3">
        {{-- Main Filter --}}
        <div>
            <p class="product-filter-head">Select Filter<a href="/products" class="product-filter-link">Reset</a></p>
            <hr class="product-filter-line-break">
        </div>
        {{-- CPU Filter --}}
        <div>
            @include('front.partials._DataProcessorFilter')    
        </div>
        {{-- GPU Filter --}}
        <div>
            @include('front.partials._DataGraphicFilter') 
        </div>
        {{-- Memory Filter --}}
        <div>
            @include('front.partials._DataMemoryFilter') 
        </div>
        {{-- Storage Filter --}}
        <div>
            @include('front.partials._DataStorageFilter') 
        </div>
        {{-- Display Filter --}}
        <div>
            @include('front.partials._DataDisplayFilter') 
        </div>
    </div>
    <div class="col-md-9 co-lg-9 col-xl-9">
        <div class="row">
            @if($products->count())
                @each('front.partials._product', $products, 'product')
            @else
                Please find another filter.
            @endif
        </div>
    </div>
</div>
