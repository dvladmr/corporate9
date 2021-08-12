@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header about-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-xlight">{{ __('Cleaning company in Moscow') }}</h2>
                    <h2 class="font-bold">{{ __('Cleaning suite') }}</h2>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">{{ __('About our company') }}</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light">
                            <a href="/">{{ __('Home') }}</a>
                        </li>
                        <li class="breadcrumb-item hover-light">{{ __('About') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About us --}}
<section id="aboutus" class="padding_top padding_bottom">
    <div class="container aboutus">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 padding_bottom_half">
                <div class="image">
                    <img alt="SEO" src="/images/aboutus.jpg" />
                </div>
            </div>
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
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 padding_top_half text-center text-md-left">
                <h2 class="darkcolor font-normal bottom30">
                    {!! __(':html_start We provide :html_end a full range of services', [
                        'html_start' => '<span class="defaultcolor">',
                        'html_end' => '</span>'
                    ]) !!}
                </h2>
                <p class="bottom35">
                    <ul class="services-about">
                        <li>
                            {{ __('We work with individuals and legal entities.') }}
                        </li>
                        <li>
                            {{ __('We arrive with all the necessary equipment and detergents.') }}
                        </li>
                        <li>
                            {{ __('Free departure and assessment of the scope of work.') }}
                        </li>
                        <li>
                            {{ __('When ordering through the site, a gift is guaranteed.') }}
                        </li>
                    </ul>
                </p>
            </div>

            <div class="col-lg-6 offset-lg-1 col-md-6 padding_top_half">
                <div class="progress-bars">
                    <div class="progress">
                        <p>Уборка после ремонта</p>
                        <div class="progress-bar gradient-bg" data-value="100">
                            <span class="gradient-bg whitecolor">100% Чистота</span>
                        </div>
                    </div>
                    <div class="progress">
                        <p>Уборка квартир</p>
                        <div class="progress-bar gradient-bg" data-value="100">
                            <span class="gradient-bg whitecolor">100% Чистота</span>
                        </div>
                    </div>
                    <div class="progress">
                        <p>Уборка домов и коттеджей</p>
                        <div class="progress-bar gradient-bg" data-value="100">
                            <span class="gradient-bg whitecolor">100% Чистота</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Work Process --}}
@include('partials.work-process')

{{-- Partners --}}
@include('partials.partners')

{{-- Contact us --}}
@include('partials.contact')
@endsection
