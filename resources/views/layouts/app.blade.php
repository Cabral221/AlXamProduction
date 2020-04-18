<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Al Xam Production</title>

        <!-- Fonts -->
       @include('layouts.css')
       @yield('style')
</head>
<body>
    
    @include('layouts.navbar')
    
    <main role="main">
        @yield('header')
        @yield('container')
        @include('layouts.modals')
    </main>

    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    @include('flashy::message')
    @yield('script')
</body>
</html>