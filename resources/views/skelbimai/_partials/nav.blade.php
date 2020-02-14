<div class="row align-items-center">

    <div class="col-6 col-xl-2">
        <h1 class="mb-0 site-logo"><a href="/" class="text-white mb-0">Srotas.lt</a></h1>
    </div>
    <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="/">Pradinis</a></li>
                <li><a href="/all">Skelbimai</a></li>
                <li><a href="/contact">Kontaktai</a></li>
                <li class="has-children">
                    <a href="/info">Apie</a>
                    <ul class="dropdown">
                        <li><a href="/info">Projekto informacija</a></li>
                    </ul>
                </li>
@guest
                <li class="ml-xl-3 login"><a href="/login"><span class="border-left pl-xl-4"></span>Prisijungti</a></li>

                <li><a href="/register" class="cta"><span class="bg-primary text-white rounded">Registruotis</span></a></li>
    @endguest
                @auth
                <li><a href="/logout" class="cta"><span class="bg-primary text-white rounded">Atsijungti</span></a></li>
                    @endauth
            </ul>
        </nav>
    </div>

    <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
        <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
    </div>

</div>
<!-- </div> -->