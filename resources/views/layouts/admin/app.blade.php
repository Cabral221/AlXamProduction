<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rekel Administration</title>

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin_asset/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('admin_asset/assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  
  @include('layouts.admin.style')
</head>
<body>
  <div class="wrapper ">
    @include('layouts.admin.sidebar')
    <div class="main-panel">
      @include('layouts.admin.navbar')
      <div class="content">
          <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @yield('container')
          </div>
      </div>
      @include('layouts.admin.footer')
    </div>
  </div>

  @include('layouts.admin.plugin')
    
  @include('layouts.admin.script')
</body>
</html>