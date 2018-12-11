@extends('front.layout.app')

@section('content')
    <div class="full-width">
        <div>
            @include('front.inc.nav')
        </div>
        {{-- SlideShow --}}
        <div class="paralax-slide">
            @include('front.inc.slideshow')
        </div> 
        <hr class="line-break">
        {{-- Product Feature --}}
        <div class="paralax-product">
            @include('front.inc.products-feature')
        </div>
        <hr class="line-break">
        {{-- Product Promotion --}}
        <div class="paralax-product-top">
            @include('front.inc.products-top')
        </div>
        <hr class="line-break">
        {{-- Slide Auto --}}
        <div class="">
            @include('front.inc.slideshow-auto')
        </div>
        <hr class="line-break">
        {{-- Footer --}}
        <div class="paralax-footer">
            @include('front.inc.footer')
        </div>
    </div>
    <script src="/js/slideshow-auto.js"></script>
@endsection

