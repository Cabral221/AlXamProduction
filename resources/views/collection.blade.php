@extends('layouts.app')
@section('header')
<div class="jumbotron">
    <div class="container">
        <div class="row jumbo-collection">
            <h2>Toutes nos collections de musiques</h2>
        </div>
    </div>
</div>
@endsection

@section('container')
<section class="section marketing">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-center mb-3">Top populaires</h2>
        </div>
        <div class="row mb-5">
            <div class="col-sm-3">
                <div class="card bg-dark text-white text-left">
                    <img class="card-img" src="{{ asset('user/img/slide3.jpg') }}" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Perfect | Ed Sharan</h5>
                        <p class="card-text">Hip Hop - 4:22</p>
                        <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-dark text-white text-left">
                    <img class="card-img" src="{{ asset('user/img/slide3.jpg') }}" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Perfect | Ed Sharan</h5>
                        <p class="card-text">Hip Hop - 4:22</p>
                        <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-dark text-white text-left">
                    <img class="card-img" src="{{ asset('user/img/slide3.jpg') }}" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Perfect | Ed Sharan</h5>
                        <p class="card-text">Hip Hop - 4:22</p>
                        <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card bg-dark text-white text-left">
                    <img class="card-img" src="{{ asset('user/img/slide3.jpg') }}" alt="Card image">
                    <div class="card-img-overlay">
                        <h5 class="card-title">Perfect | Ed Sharan</h5>
                        <p class="card-text">Hip Hop - 4:22</p>
                        <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-3">
            <div class="col-sm-3 text-left">
                <h5 class="mt-3">Trier par categorie</h5>
                <div class="categorie-collection">
                    <form action="#" method="post">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Toutes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Hip Hop
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Rnb
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                            <label class="form-check-label" for="exampleRadios3">
                                Gospel
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Hip Hop
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Rnb
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                            <label class="form-check-label" for="exampleRadios3">
                                Gospel
                            </label>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-danger">Filtrer</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col text-center mb-5">
                        <h2>All music</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="card-columns">
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide4.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide2.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide3.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide1.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide5.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide4.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide2.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide3.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide1.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                        <div class="card bg-dark text-white text-left">
                            <img class="card-img" src="{{ asset('user/img/slide5.jpg') }}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Perfect | Ed Sharan</h5>
                                <p class="card-text">Hip Hop - 4:22</p>
                                <p class="card-text mt-auto mb-0 text-danger"><i class="fas fa-play"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="text-center div-pagination">
                        <ul class="pagination pagination-sm mx-auto">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section needed">
    <div class="container">
        <div class="content">
            <h2 class="text-center">Confiez nous votre talent</h2>
            <h2 class="text-center">Nous vous offrons une carriére</h2>
        </div>
    </div>
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