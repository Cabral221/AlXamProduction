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
                                <img src="{{ ($artist->avatar !== null) ? asset('storage/'.$artist->avatar->avatar) : asset('storage/uploads/avatar.png') }}" width="110px" class="avatar pull-left" alt="" srcset="">
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

    <section class="section needed">
            <div class="container">
                <div class="menu-artist">
                    <ul class="">
                        <li class="active">
                            <a href="{{route('artist.index')}}" class="">Sons <span class="small float-right">({{ $artist->songs->count() }})</span></a>
                        </li>
                        <li class=""><a href="#" class="">Playlist</a></li>
                        <li class=""><a href="{{ route('artist.opportinuite') }}" class="">Opportinuités</a></li>
                        <li class=""><a href="#" class="">Fans</a></li>
                    </ul>
                </div>
            </div>
    </section>
    
    <section class="section">
        <div class="container text-left">
            <div class="row mb-3">
                <div class="col-sm-8">
                    <h2 class="float-left">Tous vos titres</h2>
                    <span class="badge badge-pill badge-danger float-right mr-3" style="line-height:2.2rem;" >3 / 5</span>
                </div>
                <div class="col-sm-4 text-left">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addSongModal">
                        Ajouter un son
                    </button>
                    <a href="#" class="btn btn-danger">Ajouter un album</a>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-sm-8">
                    <div class="list-son">
                        @foreach ($songs as $song)
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
                                <span class="mr-2 ml-2"><a href="#" onclick="event.preventDefault();document.getElementById('songDelete-{{ $song->id }}').submit();"><i class="fas fa-trash-alt"></i></a></span>
                                <form id="songDelete-{{ $song->id }}" action="{{ route('artist.deleteSong', $song) }}" method="POST" class="d-none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                            </div>
                        </div>
                            
                        @endforeach
                        <div class="list-son-item d-flex">
                            <div class="son-avatar d-flex align-content-center flex-wrap">
                                <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                            </div>
                            <div class="">
                                <div class="son-title">
                                    <p>Fausse Donnée</p>
                                </div>
                                <audio class="js-player" controls>
                                    <source src="http://localhost:8000/user/sons/music.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <div class="son-time d-flex align-content-center flex-wrap ml-auto mr-2">
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></a></i></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                            </div>
                        </div>
                        <div class="list-son-item d-flex">
                            <div class="son-avatar d-flex align-content-center flex-wrap">
                                <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                            </div>
                            <div class="">
                                <div class="son-title">
                                    <p>Taylor Gang</p>
                                </div>
                                <audio controls>
                                    <source src="http://localhost:8000/user/sons/music.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <div class="son-time d-flex align-content-center flex-wrap ml-auto mr-2">
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></a></i></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                            </div>
                        </div>
                        <div class="list-son-item d-flex">
                            <div class="son-avatar d-flex align-content-center flex-wrap">
                                <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                            </div>
                            <div class="">
                                <div class="son-title">
                                    <p>Taylor Gang</p>
                                </div>
                                <audio controls>
                                    <source src="http://localhost:8000/user/sons/music.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                            <div class="son-time d-flex align-content-center flex-wrap ml-auto mr-2">
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></a></i></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                            </div>
                        </div>
                        <div class="text-center div-pagination">
                            {{ $songs->links() }}
                        </div>
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
    
    <section class="section">
        <div class="container">
            <div class="row my-3">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card card-profil-update">
                        <div class="card-body">
                            <h2>Zone Profile</h2>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                   <div class="card card-profil-update danger">
                        <div class="card-body text-danger">
                            <h2>Zone Danger</h2>
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

@endsection

@section('modals')
    @include('layouts.artist.modals.addSong')
@endsection

@section('script')
<script src="{{ asset('user/js/plyr.js') }}"></script>
<script>
    const player = new Plyr.setup('.js-player');
</script>
@endsection