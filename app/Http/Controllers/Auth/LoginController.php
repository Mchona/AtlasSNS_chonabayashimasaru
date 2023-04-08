<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/home';

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
        $data = $request->only('mail', 'password');

        if (Auth::attempt($data)) {
            $username = Auth::user()->username;
            $request->session()->put('username', $username);
            return redirect('/top');
        }

        if ($request->isMethod('post')) {
            //↓ログイン条件は公開時には消すこと
            if (Auth::attempt($data)) {
                return redirect('/top');
            }
        }

        return view("auth.login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function index()
    {
        $user = Auth::user();
        return view('page')->with('username', $user->username);
    }
}
