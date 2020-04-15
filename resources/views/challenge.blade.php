@extends('layouts.app')

@section('header')
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <h2>Découvrez toutes les opportinuités qui s'offrent à vous !</h2>
            </div>
        </div>
    </div>
@endsection

@section('container')

    <div class="section marketing">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="header">
                        <h4 class="mb-3">Type d'opportinuités</h4>
                    </div>
                    <div class="form-opp text-left pl-3">
                        <form action="#" method="POST">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck0">
                                <label class="form-check-label" for="defaultCheck0">
                                  Concert
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                  Licence
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                <label class="form-check-label" for="defaultCheck2">
                                  Radio Play
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                  Maison de disque
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                                <label class="form-check-label" for="defaultCheck4">
                                  Services Professionnels
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                <label class="form-check-label" for="defaultCheck5">
                                  Publication
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                                <label class="form-check-label" for="defaultCheck6">
                                  Autre
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="form">
                        <form class="form">
                            <div class="form-group w-75 mb-2">
                              <input type="password" class="form-control" id="inputPassword2" placeholder="Rechercher">
                            </div>
                          </form>
                    </div>
                    <div class="row">
                        <div class="card-opp text-left">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="{{ asset('user/img/slide1.jpg') }}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="col-sm-9">
                                            <a href="#"><h5 class="text-bold">Obtenez votre musique sous licence par les cinéastes sur Artlist</h5></a>
                                            <div class="row text-muted">
                                                <div class="col-sm-4">
                                                    <div> <span class="text-danger">Payant (2.500 FCFA)</span></div>
                                                    <div><small>Radio Play</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                                    <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#" class="btn btn-outline-danger btn-sm mt-auto mb-0">Postuler</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="{{ asset('user/img/slide1.jpg') }}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="col-sm-9">
                                            <a href="#"><h5 class="text-bold">Jouez aux côtés des meilleures têtes d'affiche rock au festival Inkcarceration</h5></a>
                                            <div class="row text-muted">
                                                <div class="col-sm-4">
                                                    <div><span class="text-danger">Gartuit</span></div>
                                                    <div><small>Concert</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                                    <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#" class="btn btn-outline-danger btn-sm mt-auto mb-0">Postuler</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="{{ asset('user/img/slide1.jpg') }}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="col-sm-9">
                                            <a href="#"><h5 class="text-bold">Obtenez votre musique sous licence par les cinéastes sur Artlist</h5></a>
                                            <div class="row text-muted">
                                                <div class="col-sm-4">
                                                    <div> <span class="text-danger">Payant (2.500 FCFA)</span></div>
                                                    <div><small>Radio Play</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                                    <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#" class="btn btn-outline-danger btn-sm mt-auto mb-0">Postuler</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="{{ asset('user/img/slide1.jpg') }}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="col-sm-9">
                                            <a href="#"><h5 class="text-bold">Jouez aux côtés des meilleures têtes d'affiche rock au festival Inkcarceration</h5></a>
                                            <div class="row text-muted">
                                                <div class="col-sm-4">
                                                    <div><span class="text-danger">Gartuit</span></div>
                                                    <div><small>Concert</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                                    <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#" class="btn btn-outline-danger btn-sm mt-auto mb-0">Postuler</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="{{ asset('user/img/slide1.jpg') }}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="col-sm-9">
                                            <a href="#"><h5 class="text-bold">Obtenez votre musique sous licence par les cinéastes sur Artlist</h5></a>
                                            <div class="row text-muted">
                                                <div class="col-sm-4">
                                                    <div> <span class="text-danger">Payant (2.500 FCFA)</span></div>
                                                    <div><small>Radio Play</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                                    <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#" class="btn btn-outline-danger btn-sm mt-auto mb-0">Postuler</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="{{ asset('user/img/slide1.jpg') }}" width="100%" alt="" srcset="">
                                        </div>
                                        <div class="col-sm-9">
                                            <a href="#"><h5 class="text-bold">Jouez aux côtés des meilleures têtes d'affiche rock au festival Inkcarceration</h5></a>
                                            <div class="row text-muted">
                                                <div class="col-sm-4">
                                                    <div><span class="text-danger">Gartuit</span></div>
                                                    <div><small>Concert</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div><small><i class="fas fa-map-marker-alt"></i> Ndar FM</small></div>
                                                    <div><small><i class="fas fa-calendar-alt"></i></i> 18-21 Juin 2020</small></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <a href="#" class="btn btn-outline-danger btn-sm mt-auto mb-0">Postuler</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection