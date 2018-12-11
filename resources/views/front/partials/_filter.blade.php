@foreach ($mappings as $key => $map)
    @include('front.partials._filter_list', compact('key', 'map'))
@endforeach
