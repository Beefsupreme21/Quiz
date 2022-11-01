<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = $request->validate([
            'name'=> 'required',
        ]);

        User::create($user);
        
        return redirect('/users');
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);    
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
        ]);        
    }

    public function update(Request $request, User $user)
    {
        $updatedUser = $request->validate([
            'name'=> 'required',
        ]);

        $user->update($updatedUser);

        return redirect('/users');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');    
    }
}
