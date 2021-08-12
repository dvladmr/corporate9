{{-- #translate --}}
@extends('layouts.app')
@section('main')

{{-- Banner --}}
<section id="main-banner-page" class="position-relative page-header blog-header parallax section-nav-smooth">
    <div class="overlay overlay-dark opacity-7 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h1 class="font-bold">{{ __('Portfolio') }}</h1>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">{{ __('Portfolio') }}</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">{{ __('Home') }}</a></li>
                        <li class="breadcrumb-item hover-light">{{ __('Portfolio') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our Blogs --}}
{{-- #todo use lesser href="#" tags --}}
<section id="our-blog" class="bglight padding">
    <div class="container">
        <div id="blog-measonry" class="cbp">
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/portfolio1.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor">
                            <a href="#">
                                Мойка фасада и остекления
                            </a>
                        </h3>
                        <p class="bottom35">Мойка фасада и остекления, чистка крыши от моха и веток, общей площадью 1000 м2, Новорожиское шоссе 13 км</p>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/portfolio2.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">
                            Мойка остеклекния фасада банка
                        </a></h3>
                        <p class="bottom35">
                            Мойка остекления фасада банка 1230 кв.м с удаление ржавчины с алюминиевых профилей
                        </p>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/portfolio3.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">
                            Мойка фасада
                        </a></h3>
                        <p class="bottom35">
                            Мытьё фасада загородного дома от высолов и послестроительных загрязнений, удаление пятен с медных водостоков и отливов
                        </p>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/portfolio4.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">Уборка после строительных работ</a></h3>

                        <p class="bottom35">Уборка после строительных работ коттеджа 500м2 и мойка остекления</p>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/portfolio5.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">
                            Уборка квартиры
                        </a></h3>
                        <p class="bottom35">
                            Уборка квартиры +химчистка мягкой мебели ул.Гарибальди
                        </p>
                    </div>
                </div>
            </div>
            <div class="cbp-item">
                <div class="news_item shadow text-center text-md-left">
                    <a class="image" href="#">
                        <img src="/images/portfolio6.jpg" alt="Latest News" class="img-responsive">
                    </a>
                    <div class="news_desc">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="#">Мойка витражей магазина</a></h3>

                        <p class="bottom35">Мойка остекления витражей магазина</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pagination --}}
        {{-- <ul class="pagination justify-content-center top40">
            <li class="page-item"><a class="page-link disabled" href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
        </ul> --}}
    </div>
</section>

{{-- Contact us --}}
@include('partials.contact')
@endsection
