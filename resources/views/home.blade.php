@extends('layouts.main')

@section('main-content')
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
@endsection
