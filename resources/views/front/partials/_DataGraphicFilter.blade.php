
<div class="row clear-filter-padding">
    <div class="col-md-7 product-filter-filter-text">
        <a>GPU</a>
    </div>
    <div class="col-md-5 clear-filter-link ">
        @if(request('gpu'))
            <a href="{{ route('front.products', array_except(request()->query(), ['gpu'])) }}" class="product-filter-filter-link">
            Clear</a>
        @endif
    </div>
</div>

<div class="row clear-filter-padding">
    <div class="col-md-12">
        @foreach ([ 'nqd' => 'GeForce® Quadro Series',
                    'gtx10' => 'GeForce® GTX 10 Series',
                    'gtx9' => 'GeForce® GTX 9 Series',
                    'gt' => 'GeForce® GT Series',
                    'rqd' => 'Radeon™ Quadro Series',
                    'rx' => 'Radeon™ RX Series',
                    'r' => 'Radeon™ R Series',
                    'hd' => 'Radeon™ HD Series',
                    'intel' => 'Intel® Series',] as $value => $name)
            <a 
                href="{{ route('front.products', array_merge(request()->query(), ['gpu' => $value])) }}" 
                class="filter-list-group-item{{ request('gpu') === $value ? ' active' : '' }}">{{ $name }}
            </a>
        @endforeach
    </div>
</div><br>

<hr class="product-filter-line-break">