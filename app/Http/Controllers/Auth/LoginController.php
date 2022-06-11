<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
use Kreait\Firebase\Exception\FirebaseException;
use Illuminate\Validation\ValidationException;
use Kreait\Firebase\Factory;
use Session;
use App\Models\User;

class LoginController extends Controller
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
    protected $auth;
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
        $factory = (new Factory)->withServiceAccount(public_path('firebase-config.json'))
            ->withDatabaseUri('https://ltc-group-invoice-default-rtdb.firebaseio.com');

        $this->auth = $factory->createAuth();
    }
    protected function login(Request $request) {
        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($request['email'], $request['password']);
            $user = new User($signInResult->data());

            //uid Session
            Session::put('uid',$signInResult->firebaseUserId());

            Auth::login($user);
            return redirect($this->redirectPath());
        } catch (FailedToVerifyToken $e) {
            return response()->json([
                'message' => 'Unauthorized - Email or password is invalid: ' . $e->getMessage()
            ], 401);

        } catch (FirebaseException $e) {
            return response()->json([
                'message' => 'Oops! - Something went wrong : ' . $e->getMessage()
            ], 401);
        }
    }

    public function handleCallback(Request $request, $provider) {
        $socialTokenId = $request->input('social-login-tokenId', '');
        try {
            $verifiedIdToken = $this->auth->verifyIdToken($socialTokenId);
            $user = new User();
            $user->displayName = $verifiedIdToken->getClaim('name');
            $user->email = $verifiedIdToken->getClaim('email');
            $user->localId = $verifiedIdToken->getClaim('user_id');
            Auth::login($user);
            return redirect($this->redirectPath());
        } catch (\InvalidArgumentException|FailedToVerifyToken $e) {
            return redirect()->route('login');
        }
    }
}
