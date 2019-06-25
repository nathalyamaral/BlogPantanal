<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginAdminController extends Controller
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
    protected $redirectTo = 'admin.home';
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'locked',
            'unlock'
        ]);
    }
    
    public function showLoginForm() { 
        return view('admin.login'); 
    }
    
    
    public function Login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {  
            return redirect()->intended('admin/home');
        }else{
            return back()->with('error', 'Email e/ou Senha invalido(s)');
        }
    }
    
    public function locked()
    {
        
        return view('admin.lockscreen');
    }
    
    public function unlock(Request $request)
    {
        $check = Hash::check($request->input('password'), $request->user()->password);
        
        if(!$check){
            return redirect()->route('admin.lockscreen')->withErrors([
                'Sua senha não corresponde ao seu perfil.'
                ]);
            }
            
            session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);
            
            return redirect('/');
        }
    }
    