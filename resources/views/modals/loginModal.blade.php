{{-- Login Modal  --}}
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Vous étes ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="progress d-none">
                <div id="progress__song" class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">0%</div>
            </div>
            {{-- Button de choix --}}
            <div>
                <button id="loginUser" class="btn btn-block mb-2 btn-primary btn-lg" data-toggle="modal" data-target="#loginUserModal">
                    Fan
                </button>
            </div>
            <div>
                <button id="loginArtist" class="btn btn-block mb-2 btn-danger btn-lg" data-toggle="modal" data-target="#loginArtistModal">
                    Artiste
                </button>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
        </div>
    </div>
    </div>
</div>
{{-- End Login Modal --}}
{{-- login User --}}
<div class="modal fade" id="loginUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            {{-- Button de choix --}}
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('user.login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-10 mr-auto ml-auto">
                                <a href="{{ route('user.loginFacebook','facebook') }}" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-3"></i>Se connecter via facebook</a>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 mr-auto ml-auto">
                                <input id="email-user" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email@exemple.com" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 mr-auto ml-auto">
                                <input id="password-user" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 mr-auto ml-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-10 mr-auto ml-auto">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Se connecter') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
        </div>
    </div>
    </div>
</div>
{{-- End login User --}}
{{-- login Artist --}}
<div class="modal fade" id="loginArtistModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
           
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('artist.login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-10 mr-auto ml-auto">
                                <a href="{{ route('artist.loginFacebook','facebook') }}" class="btn btn-facebook btn-block btn-primary"><i class="fab fa-facebook-f mr-3"></i>Se connecter via facebook</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10 mr-auto ml-auto">
                                <input id="email" type="email" class="form-control @error('email-artist') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email@exemple.com" required autocomplete="email" autofocus>

                                @error('email-artist')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 mr-auto ml-auto">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Mot de passe" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10 mr-auto ml-auto">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
        </div>
    </div>
    </div>
</div>
{{-- End login Artist --}}