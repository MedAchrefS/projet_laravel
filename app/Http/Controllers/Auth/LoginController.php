<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
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
    protected function redirectTo()
    {
      /*   if (auth()->user()->role == 'admin') {
            return '/admin/index';
        } */

        $user=new User();
        $user = auth()->user();

        $out = new \Symfony\Component\Console\Output\ConsoleOutput();

        $out->writeln("hello");
        $out->writeln($user->hasRole('User'));
        $out->writeln("hello/////////////////////////////////");
            if($user->hasRole('admin')){
                return '/admin/index';
            }else{
                return '/home';
            }
  
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
