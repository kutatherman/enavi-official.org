<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\RedirectResponse
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

//    protected function authenticated(Request $request, $user)
//    {
//        if ($user->isAdmin()) {// do your magic here
//            return redirect()->route('dashboard.show');
//        }
//        return redirect('/home');
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        smilify('success', 'successfully connected');
    }

    public function username()
    {
        return 'username';
    }
}
