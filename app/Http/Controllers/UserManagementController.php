<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserManagementController extends Controller
{
 
    public function index()
    {
        $users = User::paginate(10);
  
        return view('UserManagement.index',['users' => $users]);
    }
    public function create()
    {
        return view('UserManagement.create');
    }

    public function store(Request $request)
    {
     
    }

    public function show(User $user)
    {
        return view('UserManagement.show',compact('user'));
    }

    
}
