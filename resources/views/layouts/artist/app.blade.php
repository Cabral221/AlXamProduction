<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Al Xam Production</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('user/css/fontawesome5/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/fontawesome5/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('user/css/fontawesome5/css/solid.css') }}" rel="stylesheet">
    
    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ asset('user/bootstrap4/css/bootstrap.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    
    
    <link rel="stylesheet" href="{{ asset('user/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('user/css/styleNav.css')}}">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('welcome')}}"> <img src="{{ asset('user/img/logo.png') }}" class="mr-3" width="40px" height="40px" alt="" srcset="">Al Xam Production</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('welcome')}}">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('collection')}}">Collection</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('projet')}}">Projet</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('challenge')}}">Challenge</a>
                        </li>
                    </ul>
                    <div class="dropdown mr-2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fas fa-bell"></i>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-item">
                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                      <img src="https://i.picsum.photos/id/1014/10/10.jpg" class="rounded mr-2" alt="...">
                                      <strong class="mr-auto">Bootstrap</strong>
                                      <small>11 mins ago</small>
                                      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="toast-body">
                                      Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item">
                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header">
                                        <img src="https://i.picsum.photos/id/1014/10/10.jpg" class="rounded mr-2" alt="...">
                                        <strong class="mr-auto">Bootstrap</strong>
                                        <small class="text-muted">2 seconds ago</small>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body">
                                        Heads up, toasts will stack automatically
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>








                    <div class="dropdown nav-button notifications-button hidden-sm-down">

                        <a class="btn btn-secondary dropdown-toggle" href="#" id="notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i id="notificationsIcon" class="fas fa-bell" aria-hidden="true"></i>
                          <span id="notificationsBadge" class="badge badge-danger"><i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i></span>
                        </a>
                  
                        <!-- NOTIFICATIONS -->
                        <div class="dropdown-menu notification-dropdown-menu" aria-labelledby="notifications-dropdown">
                          <h6 class="dropdown-header">Notifications</h6>
                  
                          <!-- CHARGEMENT -->
                          <a id="notificationsLoader" class="dropdown-item dropdown-notification" href="#">
                            <p class="notification-solo text-center"><i id="notificationsIcon" class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> Chargement des dernières notifications...</p>
                          </a>
                  
                          <div id="notificationsContainer" class="notifications-container"></div>
                  
                          <!-- AUCUNE NOTIFICATION -->
                          <a id="notificationAucune" class="dropdown-item dropdown-notification" href="#">
                            <p class="notification-solo text-center">Aucune nouvelle notification</p>
                          </a>
                  
                          <!-- TOUTES -->
                          <a class="dropdown-item dropdown-notification-all" href="#">
                            Voir toutes les notifications
                          </a>
                  
                        </div>
                  
                      </div>








                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="https://i.picsum.photos/id/1014/35/35.jpg" alt="" srcset="">
                            ABdourahmane Diop
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Compte</a>
                            <a class="dropdown-item" href="#">Ventes</a>
                            <a class="dropdown-item" href="#">Deconnecter</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('container')

    @include('layouts.footer')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('user/js/appNotification.js')}}"></script>
    <script id="notificationTemplate" type="text/html">
        <!-- NOTIFICATION -->
        <a class="dropdown-item dropdown-notification" href="#">
          <div class="notification-read">
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
          <img class="notification-img" src="https://placehold.it/48x48" alt="Icone Notification" />
          <div class="notifications-body">
            <p class="notification-texte">Un nouvel incident dans votre groupe </p>
            <p class="notification-date text-muted">
              <i class="fa fa-clock-o" aria-hidden="true"></i> Mercredi 10 Mai, à 8h00
            </p>
          </div>
        </a>
    </script>
    
</body>
</html>