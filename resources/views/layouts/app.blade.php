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
    </main>
    
    @include('layouts.footer')

    @yield('modals')
    @include('modals.shareMedia')
    @include('modals.loginModal')
    
    <script src="{{ asset('js/app.js') }}"></script>
    @include('flashy::message')
    <script src="{{ asset('user/js/like.js') }}"></script>
    <script src="{{ asset('user/js/follow.js') }}"></script>
    <script src="{{ asset('user/js/autoSubmit.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    @yield('script')
</body>
</html>