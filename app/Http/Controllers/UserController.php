<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('admin.admins.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.admins.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        User::create([
            // 'role-id'=>$request->role_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'income'=>$request->income,

        ]) ;

        return redirect()->route('admins.index') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.admins.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.admins.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $requestData = $request->all() ;
        $user->update($requestData) ;
        return redirect()->route('admins.index') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admins.index') ;
    }
}
