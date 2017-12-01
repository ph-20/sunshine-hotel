<footer id="footer">

    <!-- FOOTER TOP -->
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <!-- WIDGET SOCIAL -->
                <div class="col-lg-3">
                    <div class="social">
                        <div class="social-content">
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- END / WIDGET SOCIAL -->

            </div>
        </div>
    </div>
    <!-- END / FOOTER TOP -->

    <!-- FOOTER CENTER -->
    <div class="footer_center">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-lg-5">
                    <div class="widget widget_logo">
                        <div class="widget-logo">
                            <div class="img">
                                <a href="{{ url('/') }}"><img src="{{ asset('Lotus/images/logo-footer.png') }}" alt=""></a>
                            </div>
                            <div class="text">
                                <p><i class="lotus-icon-location"></i> 92 Quang Trung, City Da Nang</p>
                                <p><i class="lotus-icon-phone"></i> 1-548-854-8898</p>
                                <p><i class="fa fa-envelope-o"></i> <a href="mailto:hello@sunshinehotel.com">hello@thelotushotel.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END / FOOTER CENTER -->

    <!-- FOOTER BOTTOM -->
    <div class="footer_bottom">
        <div class="container">
            <p>&copy; {{ date('Y') . ' ' . config('app.name') }} All rights reserved.</p>
        </div>
    </div>
    <!-- END / FOOTER BOTTOM -->

</footer>