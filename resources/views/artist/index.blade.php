@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('user/css/plyr.css') }}" />
@endsection

@section('container')
    <div class="jumbotron">
        <div class="container">
            <div class="row jumbo-artist">
                <div class="col-sm-8 profile">
                    <div class="row">
                        <div class="pull-left header mr-3 ml-3 profil-avatar">
                            <form action="{{ route('avatar') }}" method="post" enctype="multipart/form-data" class="form-autosubmit">
                                @csrf
                                <input type="file" name="avatar" class="form-control">
                                <img src="{{ ($artist->avatar !== null) ? ($artist->provider !== null ? $artist->avatar->avatar : asset('storage/'.$artist->avatar->avatar)) : asset('storage/uploads/avatar.png') }}" width="110px" class="avatar pull-left" alt="" srcset="">
                            </form>
                        </div>
                        <div class="profile-content">
                            <h2>{{ Auth::user()->name }}</h2>
                            <p class="muted">{{ Auth::user()->typeArtist->libele }}, Saint-Louis Sénégal</p>
                            <p><span class="badge badge-pill badge-danger">{{ $artist->followers->count() }} followers</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <h3>Genre</h3>
                    <a href="#" class="btn btn-sm btn-danger">Hip Hop</a>
                    <a href="#" class="btn btn-sm btn-danger">RNB</a>
                    <a href="#" class="btn btn-sm btn-danger">Gospel</a>
                    <a href="#" class="btn btn-sm btn-outline-danger"><i class="fas fa-plus"></i> Ajouter</a>
                </div>
            </div>
        </div>
    </div>
    @if ($typeArtists !== null)
        <section class="section">
            <div class="container">
                <div class="row my-3">
                    <div class="col-md-8">
                        <div class="card card-profil-update">
                            <div class="card-body">
                                <h4 class="text-danger">Infos</h4>
                                <p>Completer votre profil pour bénéficier de toutes les fonctionnalité dont vous avez besoin.</p>
                                <div class="card card-warning">
                                    <p>
                                        <form action="{{ route('artist.typeartists.store') }}" method="post">
                                            @csrf
                                            <label for="selectGenre">Vous êtes quel genre d'artiste ? </label>
                                            <select name="genre" id="selectGenre" required>
                                                <option value="">Select</option>
                                                @foreach ($typeArtists as $type)
                                                    @if ($type->libele !== 'Alternative' || $type->id !== 1)
                                                        <option value="{{ $type->id }}">{{ $type->libele }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-sm btn-danger">Valider</button>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">Description</div>
                            <div class="card-body text-left">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </section>
    @else
        @include('artist.navbar.navbar')
        
        <section class="section">
            <div class="container text-left">
                <div class="row mb-3">
                    <div class="col-sm-8">
                        <h2 class="float-left">Tous vos titres</h2>
                        <span class="badge badge-pill badge-danger float-right mr-3" style="line-height:2.2rem;" >{{ $artist->songs->count() }} / 5</span>
                    </div>
                    <div class="col-sm-4 text-left">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addSongModal">
                            Ajouter un son
                        </button>
                        <a href="#" class="btn btn-danger">Créer un album</a>
                    </div>
                </div>
                <div class="row text-left">
                    <div class="col-sm-8">
                        <div class="list-son">
                            @foreach ($songs as $song)
                            <div class="list-son-item d-flex">
                                <div class="son-avatar d-flex align-content-center flex-wrap">
                                    <img src="{{  $song->thumbnail ? asset('storage/'.$song->thumbnail) : $artist->avatar->avatar }}" class="avatar float-left" alt="Thumbnail Song" width="50px">
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
                                    <a href="#" onclick="event.preventDefault();document.getElementById('songDelete-{{ $song->id }}').submit();"><i class="fas fa-trash-alt"></i></a>
                                    <form id="songDelete-{{ $song->id }}" action="{{ route('artist.deleteSong', $song) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <span class="ml-2 mr-2"> - </span>
                                    <a href="{{ route('likeSong',$song) }}" class="mr-2 ml-2 js-like-link">
                                        <span class="">
                                            @if (Auth::guard('web')->check() && $song->isLikeByUserAuth(Auth::guard('web')->user()))
                                                <i class="fas fa-heart text-danger"></i>
                                            @elseif(Auth::guard('artist')->check() && $song->isLikeByUserAuth(Auth::guard('artist')->user()))
                                                <i class="fas fa-heart text-danger"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif
                                            <span class="js-likes">{{ $song->likes->count() }}</span>
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
                                    <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                                </div>
                            </div>
                            @endforeach
                            <div class="text-center div-pagination">
                                {{ $songs->links() }}
                            </div>
                        </div>
                        <hr>
                        <h2>Vidéos récentes</h2>
                        <div class="row list-video">
                            @foreach ($videos as $video)
                                <div class="col-sm-6 p-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        {!! $video !!}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-dark mb-3">
                            <div class="card-header">Votre Description</div>
                            <div class="card-body text-left">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
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
    @endif

@endsection

@section('modals')
    @include('modals.addSong')
@endsection

@section('script')
<script src="{{ asset('user/js/plyr.js') }}"></script>
<script>
    const player = new Plyr.setup('.js-player');
</script>
@endsection