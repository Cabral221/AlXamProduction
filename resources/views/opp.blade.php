@extends('layouts.artist.app')

@section('container')
<main role="main">
        
    <div class="jumbotron">
        <div class="container">
            <div class="row jumbo-artist">
                <div class="col-sm-8 profile">
                    <div class="row">
                        <div class="pull-left header mr-3 ml-3">
                            <img src="https://picsum.photos/seed/picsum/100/100" class="avatar pull-left" alt="" srcset="">
                        </div>
                        <div class="profile-content">
                            <h2>Abdourahmane Diop</h2>
                            <p class="muted">musicien, Saint-Louis Sénégal</p>
                            <p><span class="badge badge-pill badge-danger">+50k followers</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <h3>Genre:</h3>
                    <a href="#" class="btn btn-sm btn-danger">Hip Hop</a>
                    <a href="#" class="btn btn-sm btn-danger">RNB</a>
                    <a href="#" class="btn btn-sm btn-danger">Gospel</a>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="section needed">
        <div class="row bg-dark text-white">
            <div class="container">
                <div class="menu-artist">
                    <ul class="">
                        <li class="">
                            <a href="{{route('artist')}}" class="">Sons <span class="small float-right">(120)</span></a>
                        </li>
                        <li class=""><a href="#" class="">Playlist</a></li>
                        <li class="active"><a href="{{route('user-opp')}}" class="">Opportinuités</a></li>
                        <li class=""><a href="#" class="">Fans</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="container text-left">
            <div class="row pb-3">
                <div class="col-sm-8">
                    <h4 class="float-left">Profiter de toutes ses opportinuités recommandées</h4>
                </div>
                <div class="col-sm-4 text-right">
                    <a href="#" class="btn btn-danger">Ajouter un nouveau son</a>
                    <a href="#" class="btn btn-danger">Ajouter un album</a>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-sm-8">
                        <div class="col-sm-10 mr-auto ml-auto">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('user/img/slide2.jpg') }}" width="100%" alt="">
                                </div>
                                <div class="col-md-8 justify-content-center">
                                    <h5>Concours de Rap Grand SLAM</h5>
                                    <div class="row text-muted mb-2 mt-2">
                                        <div class="col-sm-6">
                                            <div> <span class="text-danger">Payant (2.500 FCFA)</span></div>
                                            <div><small>Radio Play</small></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                            <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <a href="#" class="badge badge-dark float-right">Voir Plus</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque csoluta assumenda alias.</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('user/img/slide2.jpg') }}" width="100%" alt="">
                                </div>
                                <div class="col-md-8 justify-content-center">
                                    <h5>Concours de Rap Grand SLAM</h5>
                                    <div class="row text-muted mb-2 mt-2">
                                        <div class="col-sm-6">
                                            <div> <span class="text-danger">Payant (2.500 FCFA)</span></div>
                                            <div><small>Radio Play</small></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                            <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <a href="#" class="badge badge-dark float-right">Voir Plus</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque csoluta assumenda alias.</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('user/img/slide2.jpg') }}" width="100%" alt="">
                                </div>
                                <div class="col-md-8 justify-content-center">
                                    <h5>Concours de Rap Grand SLAM</h5>
                                    <div class="row text-muted mb-2 mt-2">
                                        <div class="col-sm-6">
                                            <div> <span class="text-danger">Payant (2.500 FCFA)</span></div>
                                            <div><small>Radio Play</small></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                            <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <a href="#" class="badge badge-dark float-right">Voir Plus</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque csoluta assumenda alias.</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('user/img/slide2.jpg') }}" width="100%" alt="">
                                </div>
                                <div class="col-md-8 justify-content-center">
                                    <h5>Concours de Rap Grand SLAM</h5>
                                    <div class="row text-muted mb-2 mt-2">
                                        <div class="col-sm-6">
                                            <div> <span class="text-danger">Payant (2.500 FCFA)</span></div>
                                            <div><small>Radio Play</small></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                            <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <a href="#" class="badge badge-dark float-right">Voir Plus</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque csoluta assumenda alias.</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset('user/img/slide2.jpg') }}" width="100%" alt="">
                                </div>
                                <div class="col-md-8 justify-content-center">
                                    <h5>Concours de Rap Grand SLAM</h5>
                                    <div class="row text-muted mb-2 mt-2">
                                        <div class="col-sm-6">
                                            <div> <span class="text-danger">Payant (2.500 FCFA)</span></div>
                                            <div><small>Radio Play</small></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                            <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <a href="#" class="badge badge-dark float-right">Voir Plus</a>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque csoluta assumenda alias.</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                </div>
                <div class="col-sm-4">
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="https://i.picsum.photos/id/1014/200/100.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Al Xam | John Doe</h4>
                            <p class="card-text">New Album 2020.</p>
                            <a href="#" class="btn btn-danger stretched-link">Ecouter</a>
                        </div>
                    </div>
                    <hr>
                    <div class="card" style="width:100%">
                        <img class="card-img-top" src="https://i.picsum.photos/id/1014/200/100.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Al Xam | John Doe</h4>
                            <p class="card-text">New Album 2020.</p>
                            <a href="#" class="btn btn-danger stretched-link">Ecouter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section class="section marketing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{ asset('user/img/banner.jpg') }}" alt="" srcset="" width="100%">
                </div>
            </div>
        </div>
    </section><!-- /.container -->
    
    <section class="section needed">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Temoignages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">100x100</text></svg>
                    <h2>John Doe</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies .</p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">100x100</text></svg>
                    <h2>John Doe</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus.</p>
                </div>
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">100x100</text></svg>
                    <h2>John Doe</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>
            </div><!-- /.row -->
        </div>
    </section>
    <section class="section marketing newsLetter">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6">
                    <h6>Inscrivez-vous à notre NewsLetter</h6>
                    <p>Restez informer de toutes les nouveautés</p>
                </div>
                <div class="col-sm-6">
                    <form class="form-inline">
                        
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Votre email">
                        </div>
                        
                        <button type="submit" class="btn btn-dark mb-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection