<!DOCTYPE html>

{{--BY MICHAILO M. DUDASH--}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rivage Hotel - @yield('title')</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    @if(Route::currentRouteName() == 'home')
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @elseif(Route::currentRouteName() == 'faq')
        <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
    @elseif(Route::currentRouteName() == 'gallery')
        <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
    @elseif(Route::currentRouteName() == 'reservation')
        <link href="{{ asset('css/reservation.css') }}" rel="stylesheet">
    @elseif(Route::currentRouteName() == 'reviews')
        <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
    @elseif(Route::currentRouteName() == 'login')
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @elseif(Route::currentRouteName() == 'profile')
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @endif

</head>
<body>
<header style="position: fixed; z-index: 1">
    <nav
        class="navbar navbar-expand-lg navbar-light"
        style="position: fixed; z-index: 1; width: 100%"
    >
        <div class="container-fluid">
            <a href="main.php" class="nav-logo">
                <img src="{{asset('images/logo.png')}}" alt="logo" class="nav-logo" />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="main.php">|&nbsp;O&nbsp;nás</a>
                    <a class="nav-link" aria-current="page" href="gallery.php">|&nbsp;Galéria</a>
                    <a class="nav-link" aria-current="page" href="reviews.php">|&nbsp;Recenzie</a>
                    <a class="nav-link" aria-current="page" href="faq.php">|&nbsp;FAQ</a>

                    <?php
                    $login_link = 'test';
                    echo $login_link; ?>
                    <span></span>
                    <a aria-current="page" href="reservation.php" class="nav-link">
                        <span class="RB" style="position: absolute; right: 7%">| Reservation</span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <img src="{{asset('images/logoW.png')}}" alt="Rivage Hotel" class="padding-logo" />
    <img src="{{asset('images/brand.png')}}" alt="Rivage Hotel" class="padding-logo" />
    <div class="adress">
        <p>Museumstraat 1, Amsterdam, Netherlands</p>
        <br />
        <p>+380 98 976 2400</p>
        <p>D. Portashka</p>
    </div>
    <div class="foot-a">
        <a href="#reviews">|&nbsp;Recenzie</a>
        <a href="#about">|&nbsp;O&nbsp;nás</a>
        <a href="gallery.php" target="_blank">|&nbsp;Galéria</a>
        <a href="faq.html">|&nbsp;FAQ</a>
    </div>
</footer>
</body>
</html>
