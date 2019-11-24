<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();

        $out->writeln("Hello from Terminal");
        $users = User::all();
        return view('home',['users' => $users]);
    }
}
