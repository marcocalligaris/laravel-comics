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
                <li>
                    <a href=""></a>
                    <a href="{{ route($page['route_name']) }}" 
                    class="{{ request()->routeIs($page['route_name']) ? 'active' : '' }}">{{ $page['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
