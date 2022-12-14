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
    {{-- JS --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    {{-- Header --}}
    @include('includes.header')
    {{-- Main --}}
    <main>
        <div id="jumbotron"></div>
        @yield('main-content')
    </main>
    {{-- Footer --}}
    @include('includes.footer')
</body>
</html>