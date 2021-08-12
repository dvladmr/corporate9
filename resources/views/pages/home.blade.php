@extends('layouts.app')
@section('main')

{{-- Main Slider --}}
@include('partials.home-slider')

{{-- Services --}}
<div class="container">
    <div id="services-slider" class="owl-carousel">
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-clipboard"></i></span>
                <h4 class="bottom10 text-nowrap"><a href="#">{{ __('Commercial cleaning') }}</a></h4>
                <p>{{ __('We will take your object for outsourcing on favorable terms. We will provide a calculation according to the terms of reference.') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-laptop"></i></span>
                <h4 class="bottom10"><a href="#">{{ __('Cleaning of apartments in Moskow') }}</a></h4>
                <p>{{ __('General cleaning is an integral part of every person life. Sooner or later, everyone has to deal with it. In the modern world, we are used to trusting a lot of professionals.') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-globe"></i></span>
                <h4 class="bottom10"><a href="#">{{ __('Dry cleaning of furniture in Moscow') }}</a></h4>
                <p>{{ __('Dry cleaning of upholstered furniture in Moscow is an affordable service that everyone can afford.') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-edit"></i></span>
                <h4 class="bottom10"><a href="#">{{ __('Cleaning after renovation') }}</a></h4>
                <p>{{ __('The work is carried out with a professional vacuum cleaner. Dedusting surfaces. Removal of local dirt, traces of paint, cement and primer.') }}</p>
            </div>
        </div>
        <div class="item">
            <div class="service-box">
                <span class="bottom25"><i class="fa fa-globe"></i></span>
                <h4 class="bottom10"><a href="#">{{ __('Dry-cleaner of carpets in Moskow') }}</a></h4>
                <p>{{ __('Carpet cleaning is a demanded and popular service, which is invited by the company «Cleaning Lux»') }}</p>
            </div>
        </div>
    </div>
</div>

{{-- About us --}}
<section id="our-feature" class="single-feature padding_bottom padding_top_half mt-1 mt-lg-n4 mt-md-n3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 offset-lg-1 col-md-6 padding_bottom_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">
                    {!! __('Cleaning company in Moscow - :html_start LUXURY CLEANING :html_end', [
                        'html_start' => '<span class="defaultcolor">',
                        'html_end' => '</span>'
                    ]) !!}
                </h2>
                <p class="bottom35">
                    {{ __('The cleaning company in Moscow CLEANING LUX has all the resources necessary for organizing a complex of cleaning events. We create coziness and maintain cleanliness in any room: order cleaning of an apartment, house or office on favorable terms.') }}
                </p>
                <p class="bottom35">
                    {{ __('Modern cleaning from the company UBORKA LUX is an up-to-date service that includes many techniques. Only professional cleaning companies with specialized knowledge, dexterity and craftsmanship can provide quality cleaning services. Cleaning of apartments, country houses, offices by the specialists of our cleaning company is the highest quality, favorable pricing policy, saving your time. We always meet the wishes of our clients! Versatility, consistent quality, efficiency of work are the main components of our professionalism.') }}
                </p>
            </div>
            <div class="col-lg-6 col-md-6 padding_bottom_half">
                <div class="image">
                    <img alt="SEO" src="/images/aboutus.jpg" />
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Work Process --}}
@include('partials.work-process')

{{-- Statistics --}}
@include('partials.stats')

{{-- Partners --}}
@include('partials.partners')

{{-- Testimonials --}}
@include('partials.thoughts')

{{-- Contact us --}}
@include('partials.contact')
@endsection
