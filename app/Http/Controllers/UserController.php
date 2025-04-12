<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.create');
    }
    
    // public function store(UserRequest $request)
    // {
    //     User::create($request->validated());
    //     return redirect()->route('dashboard.index')->with('success', 'User Has Been added');
    // }

    public function edit(User $user) 
    {
        return view('dashboard.edit', compact('user') + ['roles' => UserRole::options()]);
    }
    public function update(User $user, UserRequest $request) 
    {
        $user->update($request->validated());
        return redirect()->route('dashboard.index')->with('success', 'Successfully Edited');
    }
    public function delete(User $user) 
    {
        $user->delete();
        return redirect()
        ->route('dashboard.index')
        ->with('success', 'Succesfully deleted');
    }
}
