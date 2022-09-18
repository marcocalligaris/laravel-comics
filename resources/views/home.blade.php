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
    @include('includes.header')
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
    @include('includes.footer')
</body>
</html>