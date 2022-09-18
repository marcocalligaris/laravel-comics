<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics | {{ $title }}</title>
    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }} " type="text/css">
</head>
<body>
    {{-- Header --}}
    <header>
        <div class="container">
            <figure>
                <a href="#"><img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics logo"></a>
            </figure>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="{{ route('characters') }}">CHARACTERS</a></li>
                    <li><a href="{{ route('comics') }}">COMICS</a></li>
                    <li><a href="{{ route('movies') }}">MOVIES</a></li>
                    <li><a href="{{ route('tv') }}">TV</a></li>
                    <li><a href="{{ route('games') }}">GAMES</a></li>
                    <li><a href="{{ route('collectibles') }}">COLLECTIBLES</a></li>
                    <li><a href="{{ route('videos') }}">VIDEOS</a></li>
                    <li><a href="{{ route('fans') }}">FANS</a></li>
                    <li><a href="{{ route('news') }}">NEWS</a></li>
                    <li><a href="{{ route('shop') }}">SHOP</a></li>
                </ul>
            </nav>
        </div>
    </header>
    {{-- Main --}}
    <main>
        <div id="jumbotron"></div>
            <section>
                <div class="container" id="current-series">
                    <div id="series-header">
                        <h3>CURRENT SERIES</h3>
                    </div>
                    <div id="series-gallery">
                        @foreach($characters as $character)
                            <div class="media-card">
                                <a href="#">
                                    <img src="{{ $character['thumb'] }}" alt="{{ $character['series'] }}">
                                    <p>{{ $character['series'] }}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>                
                    <div class="btn">
                        <button id="load-btn">LOAD MORE</button>
                    </div>
                </div>
            </section>
        </div>
        <section id="banner">
            <div class="container" id="banner-gallery">
                <div class="banner-card">
                    <a href="#">
                        <img src="{{ asset('../images/buy-comics-digital-comics.png') }}" alt="Digital comics">
                        DIGITAL COMICS
                    </a>
                </div>
                <div class="banner-card">
                    <a href="#">
                        <img src="{{ asset('../images/buy-comics-merchandise.png') }}" alt="Dc Merchandise">
                        DC MERCHANDISE
                    </a>
                </div>
                <div class="banner-card">
                    <a href="#">
                        <img src="{{ asset('../images/buy-comics-subscriptions.png') }}" alt="Subscriptions">
                        SUBSCRIPTIONS
                    </a>
                </div>
                <div class="banner-card">
                    <a href="#">
                        <img src="{{ asset('../images/buy-comics-shop-locator.png') }}" alt="Shop locator">
                        SHOP LOCATOR
                    </a>
                </div>
                <div class="banner-card">
                    <a href="#">
                        <img src="{{ asset('../images/buy-dc-power-visa.svg') }}" alt="Dc Power Visa">
                        DC POWER VISA
                    </a>
                </div>
            </div>
        </section>
    </main>
    {{-- Footer --}}
    <footer>
            <div class="footer-top">
                <div class="container" id="dc-world">
                    <div class="footer-col-left">
                        <div>
                            <h3>DC COMICS</h3>
                            <ul>
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                                <h3>SHOP</h3>
                                <ul>
                                    <li><a href="#">Shop DC</a></li>
                                    <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3>DC</h3>
                            <ul>
                            <li><a:href="#">Terms Of Use</a></li>
                            <li><a href="#">Privacy policy (New)</a></li>
                            <li><a href="#">Ad Choices</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="#">Subscriptions</a></li>
                            <li><a href="#">Talent Workshops</a></li>
                            <li><a href="#">CPSC Certificates</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shop Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3>SITES</h3>
                            <ul>
                            <li><a href="#">DC</a></li>
                            <li><a href="#">MAD Magazine</a></li>
                            <li><a href="#">DC Kids</a></li>
                            <li><a href="#">DC Universe</a></li>
                            <li><a href="#">DC Power Visa</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col-right">
                        <img src="{{ asset('../images/dc-logo-bg.png') }}" alt="DC Comics logo">
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <nav>
                        <button type="submit">SIGN-UP NOW!</button>
                        <div id="social-media">
                            <h1>FOLLOW US</h1>
                            <ul>
                                <li><a href="#"><img src="{{ asset('images/footer-facebook.png') }}" alt=""></a>
                                <li><a href="#"><img src="{{ asset('images/footer-twitter.png') }}" alt=""></a>
                                <li><a href="#"><img src="{{ asset('images/footer-youtube.png') }}" alt=""></a>
                                <li><a href="#"><img src="{{ asset('images/footer-pinterest.png') }}" alt=""></a>
                                <li><a href="#"><img src="{{ asset('images/footer-periscope.png') }}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
    </footer>
</body>
</html>