<section id="stayconnect" class="bglight position-relative">
    <div class="container">
        <div class="contactus-wrapp">
            <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                <h3 class="darkcolor bottom20">{{ __('Stay in touch') }}</h3>
            </div>

            {{-- Contact form --}}
            <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-12 col-sm-12" id="result"></div>

                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="userName" class="d-none"></label>
                            <input class="form-control" type="text" placeholder="{{ __('Fullname') }}" id="userName" name="userName" required/>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="companyName" class="d-none"></label>
                            <input class="form-control" type="text" placeholder="{{ __('Company') }}" id="companyName" name="companyName" required/>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="email" class="d-none"></label>
                            <input class="form-control" type="email" placeholder="{{ __('Email') }}" id="email" name="email" required/>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <button type="submit" class="button gradient-btn w-100" id="submit_btn">{{ __('Submit') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>