@extends('front.layout.app')

@section('content')
    <div class="full-width flow-paralax">
        <div>
            @include('front.inc.nav')
        </div>

        <div class="full-width">
            <div class="line-break-bg"></div>
            <div class="row product-filter-bg">
                <div class="col-md-12">
                </div>
            </div>
            <div class="row product-filter-body">
                <div class="d-none d-md-block col-md-3 co-lg-3 col-xl-3">
                    {{-- Main Filter --}}
                    <div>
                        <p class="product-filter-head">Filter by Brands<a href="/brands" class="product-filter-link">Reset</a></p>
                        <hr class="product-filter-line-break">
                    </div>
                    {{-- Brands Filter --}}
                    <a href="/brands?brand=apple">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'apple' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/apple.png" alt="" style=""><a class="logo-name-text">Apple</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=razer">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'razer' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/g-razer.png" alt="" style=""><a class="logo-name-text">Razer</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=rog">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'rog' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/g-rog.png" alt="" style=""><a class="logo-name-text">ROG</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=alienware">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'alienware' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/g-alienware.png" alt="" style=""><a class="logo-name-text">Alienware</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=predator">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'predator' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/g-predator.png" alt="" style=""><a class="logo-name-text">Predator</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=msi">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'msi' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/g-msi.png" alt="" style=""><a class="logo-name-text">MSI</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=acer">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'acer' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/logo-acer.png" alt="" style=""><a class="logo-name-text">ACER</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=asus">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'asus' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/logo-asus.png" alt="" style=""><a class="logo-name-text">ASUS</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=dell">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'dell' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/logo-dell.png" alt="" style=""><a class="logo-name-text">DELL</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=hp">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'hp' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/logo-hp.png" alt="" style=""><a class="logo-name-text">HP</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=lenovo">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'lenovo' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/logo-lenovo.png" alt="" style=""><a class="logo-name-text">LENOVO</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=samsung">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'samsung' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/logo-samsung.png" alt="" style=""><a class="logo-name-text">SAMSUNG</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=sony">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'sony' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/logo-sony.png" alt="" style=""><a class="logo-name-text">SONY</a>
                            </div>
                        </div>
                    </a>
                    <a href="/brands?brand=toshiba">
                        <div>
                            <div class="logo-list-group-item{{ request('brand') === 'toshiba' ? ' active' : '' }}">
                                <img class="logo-filter-img" src="/storage/logo-filter/logo-toshiba.png" alt="" style=""><a class="logo-name-text">TOSHIBA</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-9 co-lg-9 col-xl-9">
                    <div class="row">
                        @if($products->count())
                            @each('front.partials._product', $products, 'product')
                        @else
                            Please find another brand.
                        @endif
                    </div>
                </div>
            </div>

        <div class="paralax-footer">
            @include('front.inc.footer')
        </div>
    </div>
@endsection
