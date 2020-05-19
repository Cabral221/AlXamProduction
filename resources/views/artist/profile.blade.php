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
                        <div class="pull-left header mr-3 ml-3">
                            <img src="https://picsum.photos/seed/picsum/100/100" class="avatar pull-left" alt="" srcset="">
                        </div>
                        <div class="profile-content">
                            <h2>{{ $artist->name }}</h2>
                            <p class="muted">{{ $artist->typeArtist->libele }}, Saint-Louis Sénégal</p>
                            <p>
                                <a href="{{ route('artist.follow',$artist) }}" class="btn btn-sm btn-outline-danger" id="follow-btn">
                                    <span class="badge badge-pill badge-danger follower-count">{{ $artist->followers->count() }}</span>
                                    @if (Auth::guard('web')->check() && $artist->isFollowBy(Auth::guard('web')->user()))
                                        <span class="follower-word">Se désabonner</span>
                                        <i class="fas fa-bell text-danger"></i>
                                    @elseif(Auth::guard('artist')->check() && $artist->isFollowBy(Auth::guard('artist')->user()))
                                        <span class="follower-word">Se désabonner</span> 
                                        <i class="fas fa-bell text-danger"></i>
                                    @else
                                        <span class="follower-word">S'abonner</span> 
                                        <i class="far fa-bell"></i>
                                    @endif
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <a href="#"><span class="badge badger-pill badge-danger">Hip Hop</span></a>
                    <a href="#"><span class="badge badger-pill badge-danger">R&B</span></a>
                    <a href="#"><span class="badge badger-pill badge-danger">Gospel</span></a>
                </div>
            </div>
        </div>
    </div>

    <section class="section needed">
            <div class="container">
                <div class="menu-artist">
                    <ul class="">
                        <li class="active">
                            <a href="{{route('artist.profile', $artist)}}" class="">Sons <span class="small float-right"> {{ $artist->songs->count() }} </span></a>
                        </li>
                        <li class=""><a href="#" class="">Vidéos</a></li>
                        <li class=""><a href="#" class="">Spectacles</a></li>
                        <li class=""><a href="#" class="">Photos</a></li>
                    </ul>
                </div>
            </div>
    </section>
    
    <section class="section">
        <div class="container text-left">
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
                                        data-target="#showShareModal">
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
                        <div class="text-center div-pagination">
                            {{ $songs->links() }}
                        </div>
                    </div>
                    <div class="row  my-3">
                        <div class="col-12"> <h2>Dernières videos</h2></div>
                    </div>
                    <div class="row list-video">
                        @foreach ($videos as $video)
                            <div class="col-sm-6 p-2">
                                <div class="embed-responsive embed-responsive-16by9">
                                    {!! $video !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <a href="#" class="btn btn-block btn-outline-danger">Plus de vidéos</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-dark mb-3">
                        <div class="card-header">A propos de {{ ucfirst($artist->name) }}</div>
                        <div class="card-body">
                            <p>Deserunt ex amet cupidatat nulla. Cupidatat culpa aliquip adipisicing do deserunt aliqua velit nulla veniam. Nulla magna culpa veniam dolor duis cillum esse. Dolor nisi ea nisi occaecat aliquip consequat incididunt eiusmod cupidatat laboris eu veniam. Consectetur elit voluptate fugiat dolor in officia consectetur exercitation nostrud irure esse elit exercitation.</p>
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
            <div class="">
                <div id="jp"></div>
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