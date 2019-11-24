<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();

        $out->writeln("Hello from Terminal");
        $users = User::all();
        return view('admin/index',['users' => $users]);
    }
}
