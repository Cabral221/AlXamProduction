@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('user/css/plyr.css') }}" />
@endsection
@section('header')
<div class="jumbotron jumbo-song">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="artist-name mt-3 mb-3"><a href="{{ route('artist.profile',$artist) }}">{{ $artist->name }}</a></h2>
                <h4 class="song-title">{{ $song->title }}</h4>
                <div class="info mb-3">
                    <span class="badge badge-pill badge-danger">{{ $song->likes->count() }} j'aime</span>
                    <span class="badge badge-pill badge-danger">000 commentaires</span>
                </div>
                <div class="player-audio my-auto">
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
    </div>
</div>
@endsection
@section('container')
    <section class="section">
        <div class="container text-left">
            <div class="row">
                <div class="col-sm-8">
                    <h1>Plus de {{ ucfirst($artist->name) }}</h1>
                    <div class="list-son">
                        @foreach ($lastSongs as $song)
                            <div class="list-son-item d-flex">
                                <div class="son-avatar d-flex align-content-center flex-wrap">
                                    <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                                </div>
                                <div class="">
                                    <div class="son-title">
                                        <p>{{ $song->title }}</p>
                                    </div>
                                    <audio class="js-player" controls>
                                        <source src="{{ asset('storage/'.$song->audio) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                </div>
                                <div class="son-time d-flex align-content-center flex-wrap ml-auto mr-2">
                                    <a href="{{ route('likeSong',$song) }}" class="mr-2 ml-2 js-like-link">
                                        <span class="">
                                            <span class="js-likes">{{ $song->likes->count() }}</span>
                                            @if (Auth::guard('web')->check() && $song->isLikeByUserAuth(Auth::guard('web')->user()))
                                                <i class="fas fa-heart text-danger"></i>
                                            @elseif(Auth::guard('artist')->check() && $song->isLikeByUserAuth(Auth::guard('artist')->user()))
                                                <i class="fas fa-heart text-danger"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif
                                        </span>
                                    </a>
                                    <a href="#" onclick="event.preventDefault();" class="showShareModal mr-2 ml-2" 
                                        data-url="{{ route('artist.song',[$artist,$song]) }}" 
                                        data-title="{{ $song->title }}"
                                        data-thumbnail="https://picsum.photos/seed/picsum/100/100"
                                        data-artist="{{ $artist->name }}"
                                        data-toggle="modal" 
                                        data-target="#showShareModal"
                                    >
                                        <span class="">
                                            <i class="fas fa-share-square"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="mr-2 ml-2">
                                        <span class="">
                                            <i class="fas fa-comments"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="text-center">
                            <a href="#" class="btn btn-sqm btn-danger">Voir plus de chansons</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">A propos de {{ ucfirst($artist->name) }}</div>
                        <div class="card-body">
                            <div class="badge badge-pill badge-danger">{{ $artist->followers->count() }} abonnés</div>
                            <div class="badge badge-pill badge-danger">{{ $artist->songs->count() }} chansons</div>
                            <p>Deserunt ex amet cupidatat nulla. Cupidatat culpa aliquip adipisicing do deserunt aliqua velit nulla veniam. Nulla magna culpa veniam dolor duis cillum esse. Dolor nisi ea nisi occaecat aliquip consequat incididunt eiusmod cupidatat laboris eu veniam. Consectetur elit voluptate fugiat dolor in officia consectetur exercitation nostrud irure esse elit exercitation.</p>
                        </div>
                    </div>
                </div>
            </div>
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
<script src="{{ asset('user/js/SetupPlyrSong.js') }}"></script>
@endsection