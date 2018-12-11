<div class="list-group"><a>
    @if(request($key))
        <a href="{{ route('front.products', array_except(request()->query(), [$key])) }}" class="pull-right">Clear this filter<a>CPU {{ $key }}</a><br></a>
    @endif

    @foreach ($map as $value => $name)
        <a 
            href="{{ route('front.products', array_merge(request()->query(), [$key => $value])) }}" 
            class="list-group-item{{ request($key) === $value ? ' active' : '' }}">{{ $name }}
        </a>
    @endforeach
</div><br>
