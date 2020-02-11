<div class="site-section bg-light">
    <div class="container">


        <div class="row">
            <div class="col-12">
                <h2 class="h5 mb-4 text-black">Featured Ads</h2>
            </div>
        </div>
        <div class="row">
            @foreach($ads as $ad)
            <div class="col-12  block-13">
                <div class="owl-carousel nonloop-block-13">

                    <div class="d-block d-md-flex listing vertical">
                        <a href="/ad" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
                        <div class="lh-content">
                            <span class="category">{{$ad->title}}</span>
                            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                            <h3><a href="/ad">{{$ad->name}}</a></h3>
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
        </div>
        </div>
    </div>
</div>