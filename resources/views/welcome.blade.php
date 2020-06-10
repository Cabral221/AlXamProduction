@extends('layouts.app')

@section('header')
    {{-- 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="{{ asset('user/img/1al.png') }}" alt="" srcset="">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Bienvenu dans l'industrie musicale.</h1>
                        <p>Al Xam, première plateforme de production musicale à Saint-Louis.</p>
                        <p><a class="btn btn-lg btn-danger" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="{{ asset('user/img/1al.png') }}" alt="" srcset="">
                <div class="container">
                    <div class="carousel-caption">
                        <p>Développez votre carrière avec les services faciles à utiliser de Al Xam production et l'accès exclusif à l'industrie musicale.</p>
                        <p><a class="btn btn-lg btn-danger" href="#" role="button">Voir Plus</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"></rect></svg>
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
     --}}
     <div class="posR">
        <div id="section-img-header"></div>
        <div class="section-img-header__overlay">
            <h1 class="">Bienvenue Dans l'industrie musicale</h1>
            <h3>Premier pas à Saint-Louis</h3>
        </div>
     </div>

@endsection

@section('container')                
    <section class="section needed services">
        <div class="container">
            <div class="row services">
                @foreach ($services as $service)
                    <div class="col-lg-4 service-item">
                        <div class="rounded-circle bg-white d-inline-block p-3">
                            <img src="{{ asset('storage/'.$service->icon) }}" class="bd-placeholder-img" width="110px" height="110px" alt="" srcset="">
                        </div>
                        <h2>{{ ucfirst($service->title) }}</h2>
                        <p>{!! $service->describe !!}</p>
                        {{-- <h4>{{ $service->price }} Fcfa</h4> --}}
                        <p><a class="btn btn-outline-danger" href="#" role="button">View details »</a></p>
                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div><!-- /.row -->
        </div>
    </section>

    <section class="section marketing">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="text-center">Top Artistes du mois <small class="text-danger">( {{ Carbon\Carbon::now()->locale('fr-FR')->monthName }} )</small></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="list-artist">
                        <?php $z = 1?>
                        @foreach ($artists as $artist)
                            <div class="list-artist-item">
                                <div class="artist-rang">
                                    <span>{{ $z++ }}</span>
                                </div>
                                {{-- <div class="artist-avatar"> --}}
                                <img src="{{ ($artist->avatar !== null) ? ($artist->provider !== null ? $artist->avatar->avatar : asset('storage/'.$artist->avatar->avatar)) : asset('storage/uploads/avatar.png') }}" class="artist-avatar" alt="" srcset="">
                                {{-- </div> --}}
                                <p class="artist-name">
                                    <a href="{{ route('artist.profile', $artist) }}">{{ $artist->name }}</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
    </section>
    <section class="section marketing">        
        <div class="container">
            <div class="col-md-12">
                <img src="{{ asset('user/img/banner.jpg') }}" alt="" srcset="" width="100%">
            </div>
        </div>
        <div class="container">
            <hr class="featurette-divider">
        
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Relancez votre carrière. <span class="text-muted">En seulement quelques cliques.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://picsum.photos/500" alt="Image" srcset="" width="100%">
                </div>
            </div>
        
            <hr class="featurette-divider">
            
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Partagez votre votre musique. <span class="text-muted">comme un pro.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="https://picsum.photos/500" alt="Image" srcset="" width="100%">
                </div>
            </div>
            
            <hr class="featurette-divider">
            
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Faites vous entendre</h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper commodo.</p>
                </div>
                <div class="col-md-5">
                    <img src="https://picsum.photos/500" alt="Image" srcset="" width="100%">
                </div>
            </div>
        
        <hr class="featurette-divider">
        </div>
        
        <!-- /END THE FEATURETTES -->
        
    </section><!-- /.container -->

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