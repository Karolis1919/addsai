@extends('skelbimai/main')

@section('content')
<body>
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">

                <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
                    <div class="row justify-content-center mt-5">
                        <div class="col-md-8 text-center">
                            <h1>Visi skelbimai</h1>
                            <p class="mb-0">Galybės pasirinkimo</p>
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

                    <div class="row">
                        @foreach($ads as $ad)
                        <div class="col-lg-6">

                            <div class="d-block d-md-flex listing vertical">
                                <a href="/ad{{$ad->adsid}}" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
                                <div class="lh-content">
                                    <span class="category">{{$ad->title}}</span>
                                    <a href="/ad" class="bookmark"><span class="icon-heart"></span></a>
                                    <h3><a href="/ad{{$ad->adsid}}">{{$ad->name}}</a></h3>
                                    <address>{{$ad->location}}</address>
                                    <p class="mb-0">
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-warning"></span>
                                        <span class="icon-star text-secondary"></span>
                                        <span class="review">(3 Reviews)</span>
                                    </p>
                                </div>
                            </div>

                        </div>
                            @endforeach
                        </div>
                    <div class="paginate">
                        {{$ads->links()}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
@stop