@extends('layouts.default')
@section('content')



    <section class="hero-section ai1 relative" id="home">
        <div class="overlay"></div>
        <!-- Hero Content -->
        <div class="hero-section-content">

            <div class="container">
                <div class="row align-items-center">
                    <!-- Welcome Content -->
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="welcome-content text-left">
                            <div class="promo-section">
                                <!-- <h3 class="special-head cyan"> Flare Marketing</h3> -->
                            </div>
                            <h1 class="bold wow fadeInUp b-text" data-wow-delay="0.2s">@lang('main.section1t')
                            </h1>
                            <h6 class="wow fadeInUp" data-wow-delay="0.3s">@lang('main.section1b')</h6>
                            <div class="info-btn-group fadeInUp" data-wow-delay="0.4s">
                                <!-- <a href="#" class="btn info-btn green-btn mr-3">get started</a> -->
                                <a href="tel:00962790104394" class="btn info-btn green-btn mr-3">@lang('main.contactus')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-video">
                            <!-- <div class="video-btn-container">
                                <div class="video-icon">
                                    <a href=" " class="btn info-btn video-btn" id="videobtn"><i
                                            class="fa fa-play"></i></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Welcome Area End ##### -->

    <section class="about-us-area section-padding-70-70" id="about">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 col-md-12 ">

                    <div class="col-xs-12">
                        <div class="article special">

                            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/cqgtrhpg.json" trigger="loop"
                                colors="outline:#131432,primary:#ffffff,secondary:#eeaa66,tertiary:#faf9d1"
                                style="width:150px;height:100px;">
                            </lord-icon>
                            <h3 class="article__title">@lang('main.aboutust')</h3>
                            <p> </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="article special">
                            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/gqdnbnwt.json" trigger="loop"
                                colors="primary:#242424,secondary:#f5a81c" style="width:150px;height:100px;">
                            </lord-icon>
                            <h3 class="article__title">@lang('main.courage') </h3>
                            <p> </p>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-3 col-md-12">

                    <div class="col-xs-12">
                        <div class="article special mts-50">
                            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                colors="primary:#242424,secondary:#f5a81c" style="width:150px;height:100px;">
                            </lord-icon>
                            <h3 class="article__title">@lang('main.innovation') </h3>
                            <p> </p>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="article special">
                            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop"
                                colors="primary:#242424,secondary:#f5a81c" style="width:150px;height:100px;">
                            </lord-icon>
                            <h3 class="article__title">@lang('main.loyalty') </h3>
                            <p> </p>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                    <div class="who-we-contant mt-s">
                        <div class="promo-section">
                            <h3 class="special-head "> @lang('main.aboutua') </h3>
                        </div>
                        <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">  @lang('main.Flarevalues') </h4>
                        <h6 class="fadeInUp" data-wow-delay="0.4s">  @lang('main.aboutusb')</h6>
                        <!-- <p class="fadeInUp" data-wow-delay="0.5s">We support your company’s digital presence by
                            increasing its visibility in search results on search engines, whether with Content
                            optimization or google ads.</p> -->
                        <div class="promo-section">
                            <h3 class="special-head ">  @lang('main.ourvalue') </h3>
                        </div>
                        <h4 class="bl-text fadeInUp" data-wow-delay="0.3s">  @lang('main.Flarevalues')</h4>
                        <h6 class="fadeInUp" data-wow-delay="0.4s">  @lang('main.valueb') </h6>
                        <!-- <p class="fadeInUp" data-wow-delay="0.5s">We support your company’s digital presence by
                            increasing its visibility in search results on search engines, whether with Content
                            optimization or google ads.</p> -->
                        <!-- <a class="btn info-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">Read More</a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="creative-facts section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="who-we-contant">
                        <div class="promo-section">
                            <h3 class="special-head "> @lang('main.businesst1') </h3>
                        </div>
                        <h4 class="d-text bold fadeInUp" data-wow-delay="0.3s"> @lang('main.businesst2') </h4>
                        <p class="fadeInUp" data-wow-delay="0.4s"> </p>
                        <div class="services-block-four mt-30">
                            <div class="inner-box">
                                <div class="icon-img-box">
                                    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/rfnfarqt.json" trigger="hover"
                                        style="width:150px;height:100px">
                                    </lord-icon>
                                </div>
                                <h3><a href="#"> @lang('main.businesst3')  </a></h3>
                                <h3><a href="#"> @lang('main.businesst4')  </a></h3>
                                <div class="text"> </div>

                            </div>
                        </div>
                        <div class="services-block-four">
                            <div class="inner-box">
                                <div class="icon-img-box">
                                    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/coowbsor.json" trigger="hover"
                                        colors="outline:#242424,primary:#f24c00,secondary:#faefd1,tertiary:#faefd1"
                                        style="width:150px;height:100px">
                                    </lord-icon>
                                </div>
                                <h3><a href="#"> @lang('main.businesst5')  </a></h3>
                                <h3><a href="#"> @lang('main.businesst6')  </a></h3>
                                <div class="text"> </div>

                            </div>
                        </div>
                        <div class="services-block-four" style="margin-bottom:0">
                            <div class="inner-box">
                                <div class="icon-img-box">
                                    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/ozqvdvoh.json" trigger="hover"
                                        colors="outline:#121331,primary :#2ca58d,secondary :#f4c89c"
                                        style="width:150px;height:100px">
                                    </lord-icon>
                                </div>
                                <h3><a href="#"> @lang('main.businesst7')</a></h3>
                                <h3><a href="#"> @lang('main.businesst8') </a></h3>
                                <div class="text"> </div>

                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </section>

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area section-padding-100 relative" id="whyus">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-12 no-padding-left">
                    <div class="welcome-meter about-sec-wrapper wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('img/whyflare.png') }}" class="about-i" alt="creative agency">
                    </div>
                </div>

                <div class="col-12 col-lg-6 offset-lg-0 col-md-10 offset-md-1">
                    <div class="who-we-contant mt-s">
                        <div class="promo-section">
                            <h3 class="special-head "> @lang('main.aboutustt1') </h3>
                        </div>
                        <h4 class="d-text bold fadeInUp" data-wow-delay="0.3s"> @lang('main.aboutustt2') </h4>
                        <p class="fadeInUp" data-wow-delay="0.4s"> </p>
                        <div class="list-wrap align-items-center">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/check.png') }}" class="check-mark-icon"
                                            alt="influencer marketing agency">
                                        <h6 class="foot-c-info"> @lang('main.aboutustt3') </h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/check.png') }}" class="check-mark-icon"
                                            alt="social media agency">
                                        <h6 class="foot-c-info"> @lang('main.aboutustt4') </h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/check.png') }}" class="check-mark-icon" alt="seo agency">
                                        <h6 class="foot-c-info"> @lang('main.aboutustt5') </h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/check.png') }}" class="check-mark-icon"
                                            alt="branding agency">
                                        <h6 class="foot-c-info"> @lang('main.aboutustt6') </h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/check.png') }}" class="check-mark-icon"
                                            alt="social media in marketing">
                                        <h6 class="foot-c-info"> @lang('main.aboutustt7')</h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/check.png') }}" class="check-mark-icon"
                                            alt="digital marketing agency">
                                        <h6 class="foot-c-info"> @lang('main.aboutustt8')</h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/check.png') }}" class="check-mark-icon"
                                            alt="social media agency">
                                        <h6 class="foot-c-info"> @lang('main.aboutustt9')</h6>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="side-feature-list-item">
                                        <img src="{{ asset('img/check.png') }}" class="check-mark-icon"
                                            alt="creative agency">
                                        <h6 class="foot-c-info"> @lang('main.aboutustt10')</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <a class="btn info-btn green-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="#">Read
                            More</a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- ##### Our Services Area Start ##### -->
    <section class="our_services_area section-padding-0-0 relative hex-pat-1" id="Service">
        <div class="container">

            <div class="section-heading text-center">
                <span> @lang('main.servicest1') </span>
                <h2 class=" bold fadeInUp" data-wow-delay="0.3s"> @lang('main.servicest2') </h2>
                <p class="fadeInUp" data-wow-delay="0.4s"> @lang('main.servicest3')  </p>
            </div>


            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('img/seo.png') }}" width="150" alt="SEO Search engin optimization">
                        </div>
                        <div class="service-content">
                            <h6 class=" bold"> @lang('main.servicest4')  </h6>
                            <p> @lang('main.servicest5') 
                                @lang('main.servicest6')  
                                @lang('main.servicest7') 
                                @lang('main.servicest8') 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('img/add.png') }}" width="150" alt="influencer marketing agency">
                        </div>
                        <div class="service-content">
                            <h6 class="bold"> @lang('main.servicest9')  </h6>
                            <p> @lang('main.servicest10')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.2s">

                        <div class="serv_icon">
                            <img src="{{ asset('img/web.png') }}" width="150" alt="service in marketing">
                        </div>
                        <div class="service-content">
                            <h6 class=" bold"> @lang('main.servicest11') </h6>
                            <p> @lang('main.servicest12')
                                <br>
                                @lang('main.servicest13') 
                                <br>
                                @lang('main.servicest14')
                                <br>
                                @lang('main.servicest15') 
                                <br>
                                @lang('main.servicest16') 
                                <br>
                                @lang('main.servicest17')  
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.4s">

                        <div class="serv_icon">
                            <img src="{{ asset('img/creativeui.png') }}" width="150" alt="agency web design">
                        </div>
                        <div class="service-content">
                            <h6 class=" bold"> @lang('main.servicest18')  </h6>
                            <p> @lang('main.servicest19') 
                                <br>
                                @lang('main.servicest20')  
                                <br>
                                @lang('main.servicest21')  
                                <br>
                                @lang('main.servicest22') 
                                <br>
                                @lang('main.servicest23') 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.4s">

                        <div class="serv_icon">
                            <img src="{{ asset('img/ui.png') }}" width="150" alt="strategy digital marketing">
                        </div>
                        <div class="service-content">
                            <h6 class=" bold"> @lang('main.servicest24')  </h6>
                            <p> @lang('main.servicest25') </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Content -->
                    <div class="service_single_content v2 text-center wow fadeInUp" data-wow-delay="0.4s">

                        <div class="serv_icon">
                            <img src="{{ asset('img/content.png') }}" width="150" alt="search engine marketers">
                        </div>
                        <div class="service-content">
                            <h6 class=" bold"> @lang('main.servicest26')  </h6>
                            <p> @lang('main.servicest27') 
                                <br>
                                @lang('main.servicest28') 
                                <br>
                                @lang('main.servicest29') 
                                <br>
                                @lang('main.servicest30') 
                                <br>
                                @lang('main.servicest31') 
                                <br>
                                @lang('main.servicest32') 
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- ##### FAQ & Timeline Area Start ##### -->
    <div class="faq-timeline-area section-padding-0-85" id="faq">
        <div class="container">
            <div class="section-heading text-center">
                <span> @lang('main.teamt1') </span>
                <h2 class="d-text bold fadeInUp" data-wow-delay="0.3s"> @lang('main.teamt2')  </h2>
                <h6 class="fadeInUp" data-wow-delay="0.4s"> @lang('main.teamt3') </h6>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="welcome-meter wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('img/team.png') }}" alt="digital marketing">

                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12">
                    <div class="info-faq-area mt-s ">
                        <dl style="margin-bottom:0">
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.2s"> @lang('main.teamt4') 
                            </dt>
                            <dd class="fadeInUp" data-wow-delay="0.3s">
                                <h6> @lang('main.teamt5') </h6>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.3s"> @lang('main.teamt6') </dt>
                            <dd>
                                <h6> @lang('main.teamt7') </h6>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.4s">  @lang('main.teamt8') </dt>
                            <dd>
                                <h6> @lang('main.teamt9') </h6>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.5s"> @lang('main.teamt10') </dt>
                            <dd>
                                <h6>
                                @lang('main.teamt11')  
                                </h6>
                            </dd>
                            <!-- Single FAQ Area -->
                            <dt class="wave fadeInUp" data-wow-delay="0.3s">@lang('main.teamt12') </dt>
                            <dd>
                                <h6> @lang('main.teamt13') </h6>
                            </dd>
                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### FAQ & Timeline Area End ##### -->

    <section class="clients_testimonials_area bg-img section-padding-100-0" id="test">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <span> @lang('main.clientt1') </span>
                        <h2 class="d-blue bold bl-text wow fadeInUp" data-wow-delay="0.3s">@lang('main.clientt2')  </h2>
                        <!-- <p class="wow fadeInUp" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur
                            adipiscing elit. Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo. </p> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row fadeInUp" data-wow-delay="0.4s">
                <div class="col-12 col-md-12 col-sm-12">
                    <div class="client_slides owl-carousel ">


                        <div class="single-testimonial ">
                            <img src="{{ asset('img/download.png') }}" alt="graphic design ">
                        </div>
                        <div class="single-testimonial  ">
                            <img src="{{ asset('img/vend-n-go-logo.png') }}" alt="graphic design services">
                        </div>
                        <div class="single-testimonial ">
                            <img src="{{ asset('img/logo3.png') }}" alt="social media marketing ">
                        </div>
                        <div class="single-testimonial  ">
                            <img src="{{ asset('img/logo4.png') }}" alt="online marketing">
                        </div>
                        <div class="single-testimonial ">
                            <img src="{{ asset('img/logo5.png') }}" alt="google digital marketing">
                        </div>
                        <div class="single-testimonial ">
                            <img src="{{ asset('img/logo6.png') }}" alt="marketing company">
                        </div>
                        <div class="single-testimonial ">
                            <img src="{{ asset('img/logo7.png') }}" alt="seo friendly">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding-100 contact_us_area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <!-- Dream Dots -->
                        <span> @lang('main.contactt1') </span>
                        <h2 class="wow fadeInUp d-blue" data-wow-delay="0.3s"> @lang('main.contactt2') </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s"></p>
                    </div>
                </div>
            </div>


            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                    @endif
                    <div class="contact_form">
                        <form action="{{ route('ContactRequest') }}" method="POST" >
                            @csrf
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.2s">

                                        <input type="text" name="name" id="name" required>
                                         @error('name') 
                                         <div class="text-danger">
                                         {{ $message }} 
                                        </div>
                                        @enderror
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label> @lang('main.contactt3') </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.3s">

                                        <input type="text" name="email" id="email" required>
                                        @error('email') 
                                        <div class="text-danger">
                                         {{ $message }} 
                                        </div>
                                        @enderror
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label> @lang('main.contactt4') </label>

                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="phone" id="phone" required>
                                        @error('phone') 
                                        <div class="text-danger">
                                         {{ $message }} 
                                        </div>
                                        @enderror
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label> @lang('main.contacttphone') </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group wow fadeInUp" data-wow-delay="0.4s">
                                        <input type="text" name="subject" id="subject" required>
                                        @error('subject') ( {{ $message }} ) @enderror
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label> @lang('main.contactt5') </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="group wow fadeInUp" data-wow-delay="0.5s">
                                        <textarea name="message" id="message" required></textarea>
                                        @error('message') 
                                        <div class="text-danger">
                                         {{ $message }} 
                                        </div>
                                        @enderror
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label> @lang('main.contactt6') </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.6s">
                                    <button type="submit" class="btn info-btn green-btn"> @lang('main.sendmessage') </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
