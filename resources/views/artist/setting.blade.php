@extends('layouts.app')


@section('container')
    <div class="jumbotron">
        <div class="container">
            <div class="row jumbo-artist">
                <h2>Parametres du compte</h2>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card card-warning text-left">
                        <div class="card-body">
                            <h4>Modifier mon email</h4>
                            <form action="#" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" value="{{ auth()->user()->email }}">
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-danger">Changer mon email</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-body">
                            <h4>Changer de mot de passe</h4>
                            <form action="#" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Nouveau mot de passe">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Confirmation mot de passe">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-danger">Changer mon mot de passe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                   <div class="card card-red text-left">
                        <div class="card-body text-red">
                            <h2>Zone Danger</h2>
                            <p>Vous n'etes pas satisfait du contenu de RËKEL ?</p>
                            <div class="text-right">
                                <button class="btn btn-red">Supprimer mon compte</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection