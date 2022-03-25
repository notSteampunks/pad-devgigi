<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(\Illuminate\Http\Request $request){
        //echo($user);
        
        $messages=[
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Email tidak valid.',
            'password.min' => 'Kata sandi tidak boleh kurang dari 5 karakter',
            'password.required' => 'Kata sandi tidak boleh kosong.',
        ];
        $validationData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ],$messages);

        if (!auth()->attempt($validationData)) {
            return redirect()->back()->with('error', 'Email atau kata sandi salah!');  
        }
        $user = auth()->user();
        $role = $user->role;


        if($role == 'admin'){
            return redirect('/admin/dashboard');
        }else if($role == 'dokter'){
            return redirect('/dokter/dashboard');
        }else {
            return redirect('/orangtua/dashboard');
        }
    }
}
