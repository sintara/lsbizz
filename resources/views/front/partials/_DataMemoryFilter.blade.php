
<div class="row clear-filter-padding">
    <div class="col-md-7 product-filter-filter-text">
        <a>Memory (RAM)</a>
    </div>
    <div class="col-md-5 clear-filter-link ">
        @if(request('memory'))
            <a href="{{ route('front.products', array_except(request()->query(), ['memory'])) }}" class="product-filter-filter-link">
            Clear</a>
        @endif
    </div>
</div>

<div class="row clear-filter-padding">
    <div class="col-md-12">
        @foreach ([ 'u4' => 'Under 4GB', 
                    'u8' => 'Under 8GB', 
                    '8u' => 'Upper 8GB'] as $value => $name)
            <a 
                href="{{ route('front.products', array_merge(request()->query(), ['memory' => $value])) }}" 
                class="filter-list-group-item{{ request('memory') === $value ? ' active' : '' }}">{{ $name }}
            </a>
        @endforeach
    </div>
</div><br>

<hr class="product-filter-line-break">