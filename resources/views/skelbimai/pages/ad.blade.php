@extends('skelbimai/main')

@section('content')
    <body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">


                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8 text-center">
                                <h1>{{$ad->name}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="mb-4" style="margin-top: -150px;">
                            <div class="slide-one-item home-slider owl-carousel">
                                <div><img src="/public/images/img_2.jpg" alt="Image" class="img-fluid rounded"></div>
                                <div><img src="/public/images/img_3.jpg" alt="Image" class="img-fluid rounded"></div>
                                <div><img src="/public/images/img_4.jpg" alt="Image" class="img-fluid rounded"></div>
                                <div><img src="/public/images/img_1.jpg" alt="Image" class="img-fluid rounded"></div>
                            </div>
                        </div>

                        <h4 class="h5 mb-4 text-black">Aprašymas</h4>
                        <p>{{$ad->name}}</p>
                        <p>{{$ad->info}}</p>
                        <p>{{$ad->cost}}€</p>
                        <p>{{$ad->email}}</p>
                        <p>{{$ad->phone}}</p>
                        <p>{{$ad->location}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop