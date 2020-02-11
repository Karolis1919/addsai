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
                                <h1>Skelbimų redagavimas</h1>
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
                            <table class="table">
                                <a href="/form"><button type="submit" class="btn btn-primary">Naujas skelbimas</button></a>
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Pavadinimas</th>
                                    <th scope="col">Kaina</th>
                                    <th scope="col">Aprašymas</th>
                                    <th scope="col">El. paštas</th>
                                    <th scope="col">Tel.</th>
                                    <th scope="col">Vietovė</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ads as $ad)
                                    <tr>
                                        <td>{{$ad->id}}</td>
                                        <td>{{$ad->name}}</td>
                                        <td>{{$ad->cost}}</td>
                                        <td>{{$ad->info}}</td>
                                        <td>{{$ad->email}}</td>
                                        <td>{{$ad->phone}}</td>
                                        <td>{{$ad->location}}</td>
                                        <td><a href="/delete/ad/{{$ad->id}}">Šalinti</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@stop