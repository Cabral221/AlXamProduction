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
    <script src="{{ asset('user/node_modules/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('user/node_modules/@popperjs/core/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('user/bootstrap4/js/bootstrap.js') }}"></script>
    @yield('script')
</body>
</html>