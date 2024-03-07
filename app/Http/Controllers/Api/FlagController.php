<?php

namespace App\Http\Controllers\API;

use App\Models\Flag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlagController extends Controller
{


    public function index()
    {
        $flags = Flag::all();
        return response()->json($flags);
    }




    public function store(Request $request)
    {
        $request->validate([
            'country_flag' => 'required|string|max:255',
        ]);

        $flag = Flag::create([
            'country_flag' => $request->country_flag,
        ]);

        return response()->json($flag, 201);
    }




    public function show(Flag $flag)
    {
        return response()->json($flag);
    }

    public function edit(Flag $flag)
    {
        return response()->json($flag);
    }




    public function update(Request $request, Flag $flag)
    {
        $request->validate([
            'country_flag' => 'required|string|max:255',
        ]);

        $flag->update([
            'country_flag' => $request->country_flag,
        ]);

        return response()->json($flag, 200);
    }




    public function destroy(Flag $flag)
    {
        $flag->delete();
        return response()->json(null, 204);
    }
}
