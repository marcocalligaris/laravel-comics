@php 
$pages = config('main_menu');
@endphp

<header>
    <div class="container">
        <figure>
            <a href="#"><img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics logo"></a>
        </figure>
        <nav>
            <ul>
                @foreach($pages as $page)
                <li><a href="{{ route($link['route_name']) }}" class="active">{{ $link['text'] }}</a></li>
            </ul>
        </nav>
    </div>
</header>