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
        <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">

                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8 text-center">
                                <h1>Kategorijos pridėjimas</h1>
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
                        <div class="mb-4">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                            @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post" action="/store">
                                @csrf
                            <input class="text" name="title">
                                <button class="submit" name="submit">Patvirtinti</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop