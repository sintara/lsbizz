
<div class="row clear-filter-padding">
    <div class="col-md-7 product-filter-filter-text">
        <a>Screen Display</a>
    </div>
    <div class="col-md-5 clear-filter-link ">
        @if(request('display'))
            <a href="{{ route('front.products', array_except(request()->query(), ['display'])) }}" class="product-filter-filter-link">
            Clear</a>
        @endif
    </div>
</div>

<div class="row clear-filter-padding">
    <div class="col-md-12">
        @foreach ([ 'b10' => '10-inch or Under',
                    'b13' => '11-inch ~ 13-inch',
                    'b16' => '14-inch ~ 16-inch',
                    'u17' => '17-inch or Up'] as $value => $name)
            <a 
                href="{{ route('front.products', array_merge(request()->query(), ['display' => $value])) }}" 
                class="filter-list-group-item{{ request('display') === $value ? ' active' : '' }}">{{ $name }}
            </a>
        @endforeach
    </div>
</div><br>

{{-- <hr class="product-filter-line-break"> --}}