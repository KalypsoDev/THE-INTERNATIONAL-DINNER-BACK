<?php

namespace App\Http\Controllers\API;

use App\Models\Diet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DietController extends Controller
{

    public function index()
    {
        $diets = Diet::all();
        return response()->json($diets);
    }



    public function store(Request $request)
    {
        $request->validate([
            'diet_type' => 'required|string|max:255',
        ]);

        $diet = Diet::create([
            'diet_type' => $request->diet_type,
        ]);

        return response()->json($diet, 201);
    }



    public function show(Diet $diet)
    {
        return response()->json($diet);
    }

    public function edit(Diet $diet)
    {
        return response()->json($diet);
    }




    public function update(Request $request, Diet $diet)
    {
        $request->validate([
            'diet_type' => 'required|string|max:255',
        ]);

        $diet->update([
            'diet_type' => $request->diet_type,
        ]);

        return response()->json($diet, 200);
    }



    public function destroy(Diet $diet)
    {
        $diet->delete();
        return response()->json(null, 204);
    }
}
