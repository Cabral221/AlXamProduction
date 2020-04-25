@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('user/css/plyr.css') }}" />
@endsection
@section('header')
<div class="jumbotron jumbo-song">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="artist-name mt-3 mb-3">{{ $artist->name }}</h2>
                <h4 class="song-title">{{ $song->title }}</h4>
                <div class="info">
                    <span class="badge badge-pill badge-danger">{{ $song->likes->count() }} j'aime</span>
                    <span class="badge badge-pill badge-danger">000 commentaires</span>
                </div>
                <div class="player-audio">
                    <audio class="js-player" controls>
                        <source src="{{ asset('storage/'.$song->audio) }}" type="audio/mpeg">
                        Your browser does not support the audio element
                    </audio>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="https://picsum.photos/seed/picsum/200/200" width="100%" alt="" class="img-thumbnail">
            </div>
        </div>
        <div class="row">
            
        </div>
    </div>
</div>
@endsection
@section('container')
    <section class="section">
        <div class="container text-left">
            <h1>Plus de {{ ucfirst($artist->name) }}</h1>  
        </div>
    </section>
    
    <section class="section needed">
        <div class="container">
            <div class="row">
                <div class="col text-center mb-4">
                    <h2>Temoignages</h2>
                </div>
            </div>
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

@endsection

@section('script')
<script src="{{ asset('user/js/plyr.js') }}"></script>
<script src="{{ asset('user/js/SetupPlyr.js') }}"></script>
@endsection