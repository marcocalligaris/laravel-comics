<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics | {{ $title }}</title>
</head>
<body>
    <header>
        <div class="container">
            <figure>
                <a href="#"><img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics logo"></a>
            </figure>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}"></a>Home</li>
                    <li><a href="{{ route('characters') }}"></a>Characters</li>
                    <li><a href="{{ route('comics') }}"></a>Comics</li>
                    <li><a href="{{ route('movies') }}"></a>Movies</li>
                    <li><a href="{{ route('tv') }}"></a>Tv</li>
                    <li><a href="{{ route('games') }}"></a>Games</li>
                    <li><a href="{{ route('collectibles') }}"></a>Collectibles</li>
                    <li><a href="{{ route('videos') }}"></a>Videos</li>
                    <li><a href="{{ route('fans') }}"></a>Fans</li>
                    <li><a href="{{ route('news') }}"></a>News</li>
                    <li><a href="{{ route('shop') }}"></a>Shop</li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>