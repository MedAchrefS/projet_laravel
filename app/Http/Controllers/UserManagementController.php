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
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();

        $out->writeln($user->id);
        return view('UserManagement.show',['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('UserManagement.edit',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
  
        $user->update($request->all());
  
        return redirect()->route('UserManagement.index')
                        ->with('success','user updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
  
        return redirect()->route('UserManagement.index')
                        ->with('success','user deleted successfully');
    }
    
}
