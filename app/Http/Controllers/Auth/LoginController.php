<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;
use Auth;
use Session;
use Redirect;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests;




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

     protected $redirectPath = '/administrador/perfil';

    protected $loginPath = '/administrador/auth/login';

    protected function getLogin(){
        return view('administrador.welcome');
    }

    protected function postLogin(Request $request){

         if(Auth::attempt(['email'=> $request ['email'], 'password' => $request['password']])){

            

             return Redirect::to('inicio');

            }

            

             return Redirect::to('administrador')->with('message-info', ' Credenciales incorrectas');
    }
}
