<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 text-left border-primary">
                <h2 class="font-weight-light text-primary">Populiariausi</h2>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($ads as $ad)
            <div class="col-lg-6">

                <div class="d-block d-md-flex listing">
                    <a href="/ad{{$ad->adsid}}" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
                    <div class="lh-content">
                        <span class="category">{{$ad->title}}</span>
                        <a href="/ad{{$ad->adsid}}" class="bookmark"><span class="icon-heart"></span></a>
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