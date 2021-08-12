<footer id="site-footer" class="bgdark padding_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="/" class="footer_logo bottom25">
                        <img src="/images/logo.png" alt="trax">
                    </a>

                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                            <a class="d-block" href="tel:+998977500004">+7 999 000-00-00</a>
                            <a class="d-block" href="mailto:info@cleanlux.com">info@cleaninglux77.com</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">{{ __('Our services') }}</h3>
                    <ul class="links">
                        <li><a href="{{ route('services') }}">{{ __('Company') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                        <li><a href="{{ route('news') }}">{{ __('Portfolio') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('Contacts') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">{{ __('Opening hours') }}</h3>
                    <ul class="hours_links whitecolor">
                        <li><span>{{ __('Mon-Sat:') }}</span><span>09:00 - 18:00</span></li>
                        <li><span>{{ __('Friday:') }}</span><span>09:00 - 21:00</span></li>
                        <li><span>{{ __('Sunday:') }}</span><span>09:00 - 20:00</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>