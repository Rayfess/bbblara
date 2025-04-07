<?php

namespace App\Http\Controllers;

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
    
    public function store(UserRequest $request)
    {
        User::create($request->validated());
        return redirect()->route('dashboard.index')->with('success', 'User Has Been added');
    }
    public function show() {}
    public function edit() {}
    public function update() {}
    public function delete() {}
}
