<section id="our-apps" class="padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <div class="heading-title bottom30 wow fadeInUp" data-wow-delay="300ms"
                    style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <span class="defaultcolor text-center text-md-left">{{ __('Technologies we use:') }}</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-center text-md-left">
                    {{ __('We use the most modern technologies for software development and organization of the production process') }}
                </p>
            </div>
        </div>

        <div class="row d-flex align-items-center" id="app-feature">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center text-md-right">
                    <div class="feature-item mt-3 wow fadeInLeft" data-wow-delay="300ms"
                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
                        <div class="icon"><i class="fas fa-cog"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">{{ __('Software development') }}</span>
                            </h3>
                            <p>
                                {{ __('The range of technologies used is very wide, but at the same time it is individually selected taking into account the needs of each specific project.') }}
                            </p>
                            <p>
                                {{ __('For example, DBMS - classic MS SQL Server, Oracle and fairly new - MongoDB, etc., providing reliable storage and fast access to data.') }}
                            </p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInLeft" data-wow-delay="350ms" style="visibility: visible; animation-delay: 350ms; animation-name: fadeInLeft;">
                        <div class="icon"><i class="fas fa-edit"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">{{ __('Customization') }}</span>
                            </h3>
                            <p>
                                {{ __('The technologies used for organizing the production process allow us to establish a constant rhythm of production, reduce the cost of development, and automatically detect defects') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="app-image top30">
                    <div class="app-slider-lock-btn"></div>
                    <div class="app-slider-lock">
                        <img src="/images/iphone-slide-lock.jpg" alt="">
                    </div>

                    <div id="app-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-470px, 0px, 0px); transition: all 0s ease 0s; width: 1645px;">
                                <div class="owl-item active" style="width: 235px;">
                                    <div class="item">
                                        <img src="/images/iphone-slide1a.jpg" alt="iphone">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 235px;">
                                    <div class="item">
                                        <img src="/images/iphone-slide1a.jpg" alt="iphone">
                                    </div>
                                </div>
                                {{-- <div class="owl-item cloned" style="width: 235px;">
                                    <div class="item">
                                        <img src="/images/iphone-slide2.jpg" alt="iphone">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev">
                                <span aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next">
                                <span aria-label="Next">›</span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                    <img src="/images/iphone.png" alt="image">
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="text-center text-md-left">
                    <div class="feature-item mt-3 wow fadeInRight" data-wow-delay="300ms"
                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
                        <div class="icon"><i class="fas fa-code"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">{{ __('Powerful Code') }}</span>
                            </h3>
                            <p>
                                {{ __('For the development of sites and applications - PHP, JavaScript, Python, .NET and Java and the most modern technologies Bootstrap and React, VUE, Angular, allowing you to create Internet applications suitable for any type of device.') }}
                            </p>
                        </div>
                    </div>
                    <div class="feature-item mt-5 wow fadeInRight" data-wow-delay="350ms"
                        style="visibility: visible; animation-delay: 350ms; animation-name: fadeInRight;">
                        <div class="icon"><i class="far fa-folder-open"></i></div>
                        <div class="text">
                            <h3 class="bottom15">
                                <span class="d-inline-block">{{ __('Documentation') }}</span>
                            </h3>
                            <p>
                                {{ __('The customer is constantly aware of the latest developments in the development of his project, he can at any time check the work of the latest changes delivered to him automatically, see which tasks for his project have already been completed and which are currently being performed; what documents were created or changed.') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>