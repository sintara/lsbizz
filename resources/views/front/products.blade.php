@extends('front.layout.app')

@section('content')
    <div class="full-width">
        <div>
            @include('front.inc.nav')
        </div>
        <div class="full-width flow-paralax">
            @include('front.inc.product-filter')
        </div>
        <div class="paralax-footer">
            @include('front.inc.footer')
        </div>
    </div>
@endsection