<div class="footer-bg">

    <footer class="footer-area bg-img">

        <!-- ##### Contact Area Start ##### -->
        <div class="contact_us_area section-padding-100-0" id="contact">
            <div class="container">
                <div class="call-us-sec">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-9">
                            <div class="text-left">
                                <h3 class="g-text fadeInUp" data-wow-delay="0.3s">Get Your Quote or Call: (00962)
                                    07 9010 4394</h3>
                                <h2 class="bold w-text mb-0">Are You Ready? Book Appointment Now!</h2>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <a class="btn info-btn more-btn mt-s fadeInUp" data-wow-delay="0.6s"
                                href="tel:00962790104394">Call Us</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ##### Contact Area End ##### -->

        <div class="footer-content-area spec">
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-lg-5 col-md-6">
                        <div class="footer-copywrite-info">
                            <!-- Copywrite -->
                            <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                <div class="footer-logo">
                                    <a href="#"><img src="{{ asset('img/logo2.png') }}" width="150"
                                            alt="Marketing Agency web developers"> </a>
                                </div>
                                <p>Flare Marketing is a creative agency implementing advanced marketing solutions in
                                    various industries, which has contributed to high competition levels and a
                                    strong reputation...</p>
                            </div>
                            <!-- Social Icon -->
                            <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                {{-- <a href="https://www.facebook.com/Flare-Marketing-101788112385468/" target="_blank"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a> --}}
                                <!-- <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6 ">
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <!-- Content Info -->
                            <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                <h5>PRIVACY</h5>
                                <a href="index.html">
                                    <p>Home</p>
                                </a>
                                <a href="#">
                                    <p>Terms & Conditions</p>
                                </a>
                                <a href="#">
                                    <p></p>
                                </a>
                                <a href="#">
                                    <p>Privacy Policy</p>
                                </a>


                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 col-md-6  ">
                        <!-- Content Info -->
                        <div class="contact_info_area d-sm-flex justify-content-between">
                            <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                <h5>CONTACT US</h5>

                                <a href="">
                                    <p>Mailing Address: Amman-Jordan</p>
                                </a>
                                <a target="_blank"
                                    href="https://www.google.com/maps/place/Flare+Marketing/@32.0018774,35.8328202,15.52z/data=!4m19!1m13!4m12!1m4!2m2!1d35.8607108!2d31.9755846!4e1!1m6!1m2!1s0x151ca11188249d79:0x50b3f51ba7548be3!2sFlare+Marketing+location!2m2!1d35.8349998!2d32.0069637!3m4!1s0x151ca11188249d79:0x50b3f51ba7548be3!8m2!3d32.0069637!4d35.8349998">
                                    <p>Flare Marketing, King Abdullah II St, Amman</p>
                                </a>
                                <a href="tel:00962790104394" target="_blank">
                                    <p>+962 07 9010 4394</p>
                                </a>
                                <a href="mailto:fmubarak@flaremarketing.net" target="_blank">
                                    <p>fmubarak@flaremarketing.net</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-5 text-center">
                        copyright © 2020 Flare Marketing
                    </div>



                </div>

            </div>

        </div>

    </footer>
    <!-- ##### Footer Area End ##### -->
</div>

<!-- ########## All JS ########## -->
<!-- jQuery js -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- script js -->
<script src="{{ asset('js/'.app()->getLocale().'/script.js') }}"></script>
<script>
    setTimeout(function() {
        $('.loader-bg').fadeToggle();
    }, 2500);
</script>
</body>

</html>
