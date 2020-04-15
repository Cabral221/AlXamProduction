@extends('layouts.app')

@section('header')
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
@endsection

@section('container')                
    <section class="section needed services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Prooduction musicale</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Evênementiel</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
                    <h2>Tournage Clip</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
    </section>
    <section class="section marketing">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2 class="text-center">Top Artistes du mois <small class="text-danger">( Avril )</small></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="list-son">
                        <div class="list-son-item">
                            <div class="son-avatar float-left">
                                <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                            </div>
                            <div class="son-title float-left">
                                <p>Taylor Gang</p>
                            </div>
                            <audio controls>
                                <source src="http://localhost:8000/user/sons/music.mp3" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            <div class="son-time pull-right text-right mr-4">
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></a></i></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                            </div>
                        </div>
                        <div class="list-son-item">
                            <div class="son-avatar float-left">
                                <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                            </div>
                            <div class="son-icon-play float-left"><a href="#"><i class="fas fa-play"></i></a></div>
                            <div class="son-title float-left">
                                <p>Taylor Gang</p>
                            </div>
                            <div class="son-time pull-right text-right mr-4">
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></a></i></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                                <span>4:22</span>
                            </div>
                        </div>
                        <div class="list-son-item">
                            <div class="son-avatar float-left">
                                <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                            </div>
                            <div class="son-icon-play float-left"><a href="#"><i class="fas fa-play"></i></a></div>
                            <div class="son-title float-left">
                                <p>Taylor Gang</p>
                            </div>
                            <div class="son-time pull-right text-right mr-4">
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></a></i></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                                <span>4:22</span>
                            </div>
                        </div>
                        <div class="list-son-item">
                            <div class="son-avatar float-left">
                                <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                            </div>
                            <div class="son-icon-play float-left"><a href="#"><i class="fas fa-play"></i></a></div>
                            <div class="son-title float-left">
                                <p>Taylor Gang</p>
                            </div>
                            <div class="son-time pull-right text-right mr-4">
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></a></i></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                                <span>4:22</span>
                            </div>
                        </div>
                        <div class="list-son-item">
                            <div class="son-avatar float-left">
                                <img src="https://picsum.photos/seed/picsum/50/50" class="avatar float-left" alt="" srcset="">
                            </div>
                            <div class="son-icon-play float-left"><a href="#"><i class="fas fa-play"></i></a></div>
                            <div class="son-title float-left">
                                <p>Taylor Gang</p>
                            </div>
                            <div class="son-time pull-right text-right mr-4">
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-heart"></a></i></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-share-square"></i></a></span>
                                <span class="mr-2 ml-2"><a href="#"><i class="fas fa-comments"></i></a></span>
                                <span>4:22</span>
                            </div>
                        </div>
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