
<div class="row clear-filter-padding">
    <div class="col-md-7 product-filter-filter-text">
        <a>Processor</a>
    </div>
    <div class="col-md-5 clear-filter-link ">
        @if(request('cpu'))
            <a href="{{ route('front.products', array_except(request()->query(), ['cpu'])) }}" class="product-filter-filter-link">
            Clear</a>
        @endif
    </div>
</div>

<div class="row clear-filter-padding">
    <div class="col-md-12">
        @foreach ([ 'ci7' => 'Intel® Core™ i7',
                    'ci5' => 'Intel® Core™ i5',
                    'ci3' => 'Intel® Core™ i3',
                    'cm' => 'Intel® Core™ M',
                    'pen' => 'Intel® Pentium®',
                    'cel' => 'Intel® Celeron®',
                    'ato' => '‎Intel® Atom®',
                    'amd' => 'AMD',
                    'c2d' => 'Intel® Core™ 2 Dou'] as $value => $name)
            <a 
                href="{{ route('front.products', array_merge(request()->query(), ['cpu' => $value])) }}" 
                class="filter-list-group-item{{ request('cpu') === $value ? ' active' : '' }}">{{ $name }}
            </a>
        @endforeach
    </div>
</div><br>

<hr class="product-filter-line-break">