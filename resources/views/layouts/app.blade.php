<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gestionnaire de Projets')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.Navbar')

    <div class="container mt-5">

        @yield('content')

    </div>
    
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    @include('layouts.footer')
</body>
</html>
