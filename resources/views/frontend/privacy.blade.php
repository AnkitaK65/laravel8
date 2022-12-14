@extends('frontend.layouts.default')

@section('content')
<div class="special-menu pad-top-100 parallax" style="padding-top:180px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                    <h2 class="block-title color-white text-center"> Today's Special </h2>
                    <h5 class="title-caption text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia,nostrud exercitation ullamco. </h5>
                </div>
                <div class="special-box">
                    <div id="owl-demo">
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        SALMON STEAK
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{asset('frontendtheme/images/special-menu-1.jpg')}}" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        ITALIAN PIZZA
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{asset('frontendtheme/images/special-menu-2.jpg')}}" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        VEG. ROLL
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{asset('frontendtheme/images/special-menu-3.jpg')}}" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        SALMON STEAK
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{asset('frontendtheme/images/special-menu-1.jpg')}}" alt="sp-menu">
                            </div>
                        </div>
                        <div class="item item-type-zoom">
                            <a href="#" class="item-hover">
                                <div class="item-info">
                                    <div class="headline">
                                        VEG. ROLL
                                        <div class="line"></div>
                                        <div class="dit-line">Lorem ipsum dolor sit amet, consectetur adip aliqua. Ut enim ad minim venia.</div>
                                    </div>
                                </div>
                            </a>
                            <div class="item-img">
                                <img src="{{asset('frontendtheme/images/special-menu-2.jpg')}}" alt="sp-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end special-box -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection