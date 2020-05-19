    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('welcome')}}"> <img src="{{ asset('images/logo.png') }}" class="mr-3" width="40px" height="40px" alt="" srcset="">RËKEL</a>
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
                        <a class="nav-link" href="{{route('opportinuite')}}">opportinuités</a>
                    </li>
                </ul>
                @if(Auth::guard('artist')->check())
                    <div class="dropdown nav-button bg-transparent notifications-button hidden-sm-down">
                                
                        <a class="btn dropdown-toggle" href="#" id="notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <img src="{{ (Auth::guard('artist')->user()->avatar !== null) ? (Auth::guard('artist')->user()->provider !== null ? Auth::guard('artist')->user()->avatar->avatar : asset('storage/'.Auth::guard('artist')->user()->avatar->avatar)) : asset('storage/uploads/avatar.png') }}" width="35px" alt="" srcset="">
                            {{ Auth::guard('artist')->user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('artist.index') }}">Mon Profil</a>
                            <a class="dropdown-item" href="{{ route('artist.setting') }}">Paramètres</a>
                            <a class="dropdown-item" href="#">Ventes</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout').submit()">Deconnecter</a>
                            <form id="logout" action="{{ route('artist.logout') }}" method="post" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @elseif(Auth::guard('web')->check())
                
                    <div class="dropdown nav-button bg-transparent notifications-button hidden-sm-down">
                            
                        <a class="btn dropdown-toggle" href="#" id="notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <img src="{{ (Auth::user()->avatar !== null) ? (Auth::user()->provider !== null ? Auth::user()->avatar->avatar : asset('storage/'.Auth::user()->avatar->avatar)) : asset('storage/uploads/avatar.png') }}" width="35px" alt="" srcset="">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">user</a>
                            <a class="dropdown-item" href="#">Compte</a>
                            <a class="dropdown-item" href="#">Ventes</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout').submit()">Deconnecter</a>
                            <form id="logout" action="{{ route('user.logout') }}" method="post" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                @else
                    {{-- <a href="{{route('user.login')}}" class="btn btn-outline-light my-2 my-sm-0 mr-2">Se connecter</a> --}}
                    <button type="button" class="btn btn-sm btn-outline-light my-2 my-sm-0 mr-2" data-toggle="modal" data-target="#loginModal">
                        Se connecter
                    </button>
                    <a href="{{route('user.register')}}" class="btn btn-danger my-2 my-sm-0 mr-2">S'inscrire</a>
                @endif
            </div>
        </div>
    </nav>