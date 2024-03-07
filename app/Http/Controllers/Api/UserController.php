<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    


    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => $request->role_id,
        ]);

        return response()->json($user, 201);
    }

   

    public function show(User $user)
    {
        return response()->json($user);
    }

    

    public function update(Request $request, User $user)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'role_id' => 'required|exists:roles,id',
        ]);

        $userData = [
            'username' => $request->username,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'role_id' => $request->role_id,
        ];

        if ($request->has('password')) {
            $userData['password'] = bcrypt($request->password);
        }

        $user->update($userData);

        return response()->json($user, 200);
    }

  
    
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(null, 204);
    }
}
