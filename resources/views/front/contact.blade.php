@extends('front.layout.app')

@section('content')
    <div class="full-width flow-paralax">
        <div>
            @include('front.inc.nav')
        </div>

        <div class="line-break-bg"></div>
        <div class="row contact-body">
            <div class="col-md-4 col-lg-3 col-xl-3">
                <div class="new-line">
                    <h1 class="contact-head">Address</h1>
                    <a class="contact-text">#15z, Street 253,</a><br>
                    <a class="contact-text">Sangkat Tuek Laak 3, Khan Toulkok</a><br>
                    <a class="contact-text">Phnom Penh, Cambodia, 12158</a><br>
                </div>
                <div class="new-line">
                    <h1 class="contact-head">Contact</h1>
                    <a class="contact-text">Info. 086 880 681</a><br>
                    <a class="contact-text">Service 096 828 9842</a><br>
                </div>
                <div class="new-line">
                    <h1 class="contact-head">Working Time</h1>
                    <a class="contact-text">Open 8:00AM - 6:00PM</a><br>
                    <a class="contact-text">Everyday</a><br>
                </div>
                <div class="new-line">
                    <h1 class="contact-head">Visitors</h1>
                    <!-- DUPLICHECKER Code START -->
                    <a target="" title=""><img src="https://www.duplichecker.com/seotools/imageaction?code=42b141e35203fb3b0ef475aa47cc12ba&style=0004&pad=7&type=ip&initCount=0" title="web counter" Alt="click counter" border="0">
                    </a><br><br><br>
                </div>
            </div>
            <div class="col-md-8 col-lg-9 col-xl-9">
                <h1 class="contact-head">Find Us</h1>
                <img src="/storage/location/lsbizz-location.jpeg" alt="" class="contact-map">
            </div>
        </div>

        <div class="paralax-footer">
            @include('front.inc.footer')
        </div>
    </div>
@endsection
