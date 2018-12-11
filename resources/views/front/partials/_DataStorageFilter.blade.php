
<div class="row clear-filter-padding">
    <div class="col-md-7 product-filter-filter-text">
        <a>Storage</a>
    </div>
    <div class="col-md-5 clear-filter-link ">
        @if(request('storage'))
            <a href="{{ route('front.products', array_except(request()->query(), ['storage'])) }}" class="product-filter-filter-link">
            Clear</a>
        @endif
    </div>
</div>

<div class="row clear-filter-padding">
    <div class="col-md-12">
        @foreach ([ 'h32' => '320GB',
                    'h50' => '500GB',
                    'h75' => '750GB',
                    'h1t' => '1TB & Up',
                    'ssd' => 'SSD'] as $value => $name)
            <a 
                href="{{ route('front.products', array_merge(request()->query(), ['storage' => $value])) }}" 
                class="filter-list-group-item{{ request('storage') === $value ? ' active' : '' }}">{{ $name }}
            </a>
        @endforeach
    </div>
</div><br>

<hr class="product-filter-line-break">