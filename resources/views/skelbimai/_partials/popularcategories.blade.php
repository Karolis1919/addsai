<div class="site-section" data-aos="fade">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center border-primary">
                <h2 class="font-weight-light text-primary">Populiarios kategorijos</h2>
                <p class="color-black-opacity-5">Viskas ko reikia</p>
            </div>
        </div>
        @foreach($categories as $category)
        <div class="overlap-category mb-5">
            <div class="row align-items-stretch no-gutters">
                <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
                    <a href="#" class="popular-category h-100">
                        <span class="icon"><span class="flaticon-car"></span></span>
                        <span class="caption mb-2 d-block">{{$category->title}}</span>
                        <span class="number">1,921</span>
                    </a>
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>