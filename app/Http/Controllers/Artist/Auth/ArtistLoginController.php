<?php

namespace App\Http\Controllers\Artist\Auth;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ArtistLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/artist/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username().'-artist' => [trans('auth.failed')],
        ]);
    }

    protected function guard()
    {
        return Auth::guard('artist');
    }


     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        $redirectUrl = 'http://localhost:8000/artist/login/facebook/callback';
        return Socialite::driver($provider)->redirectUrl($redirectUrl)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $redirectUrl = 'http://localhost:8000/artist/login/facebook/callback';
        $artist = Socialite::driver($provider)->redirectUrl($redirectUrl)->user();
        // dd($artist);
        $authUser = $this->findOrCreate($artist, $provider);
        // dd($authUser);

        Auth::guard('artist')->login($authUser, true);
        return redirect($this->redirectTo);
    }

    public function findOrCreate($artist, $provider)
    {
        $authUser = Artist::where('provider_id',$artist->id)->first();
        if($authUser) {
            return $authUser;
        }
        return Artist::create([
            'name' => $artist->name,
            'email' => $artist->email,
            'provider' => $provider,
            'provider_id' => $artist->id,
            'type_artist_id' => 1,
        ]);
    }
}
