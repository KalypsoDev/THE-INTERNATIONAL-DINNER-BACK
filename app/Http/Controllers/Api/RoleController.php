<?php

namespace App\Http\Controllers\API;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{
    

    public function index()
    {
        $roles = Role::all();
        return response()->json($roles);
    }

   

    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|string|max:255',
            // Add any other validation rules you may have
        ]);

        $role = Role::create([
            'role_name' => $request->role_name,
            // Add any other fields you may have in your 'roles' table
        ]);

        return response()->json($role, 201);
    }

  

    public function show(Role $role)
    {
        return response()->json($role);
    }



    public function update(Request $request, Role $role)
    {
        $request->validate([
            'role_name' => 'required|string|max:255',
            // Add any other validation rules you may have
        ]);

        $role->update([
            'role_name' => $request->role_name,
            // Add any other fields you may have in your 'roles' table
        ]);

        return response()->json($role, 200);
    }


    
    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json(null, 204);
    }
}
