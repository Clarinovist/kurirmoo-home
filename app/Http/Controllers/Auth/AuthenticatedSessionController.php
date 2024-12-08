<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    // public function create()
    // {
    //     return view('auth.login');
    // }
    public function form_login(){
        return view('auth.form_login');
    }

    public function login(Request $request){
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        // dd($credentials);
        $remember = false;
        if(isset($request->remember ))
        {$remember = true;}

        if (Auth::attempt($credentials, $remember)) {
            Auth::login(Auth::user(), $remember);
            // dd(Auth::user());
            if(Auth::user()->role == 'Admin') {
                toast('Login Berhasil','success');
                // Alert::success('Berhasil', 'Anda Berhasil Login!!');
                return redirect()->route('home-admin');
            // return 'berhasil login';
            }
        } else {
            Alert::error('Failed', 'Username/Password Salah!!');
            return redirect(route('login'));
        }
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function store(LoginRequest $request)
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
