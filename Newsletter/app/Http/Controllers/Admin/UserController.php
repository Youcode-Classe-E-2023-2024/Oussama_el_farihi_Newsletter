<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index(){
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function show(User $user){
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user){
        if($user->hasRole($request->role)){
            return back()->with('message', 'Role existe');
        }

        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned');
    }

    public function removeRole(User $user, Role $role){
        if($user->hasRole($role)){
            $user->removeRole($role);
            return back()->with('message', 'Role removed');
        }
        return back()->with('message', 'Role not exists');
    }
}
