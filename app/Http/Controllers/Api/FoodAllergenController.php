<?php

namespace App\Http\Controllers\API;

use App\Models\FoodAllergen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodAllergenController extends Controller
{
    


    public function index()
    {
        $foodAllergens = FoodAllergen::all();
        return response()->json($foodAllergens);
    }



    public function store(Request $request)
    {
        $request->validate([
            'allergen_type' => 'required|string|max:255',
        ]);

        $foodAllergen = FoodAllergen::create([
            'allergen_type' => $request->allergen_type,
        ]);

        return response()->json($foodAllergen, 201);
    }

    

    public function show(FoodAllergen $foodAllergen)
    {
        return response()->json($foodAllergen);
    }

  

    public function update(Request $request, FoodAllergen $foodAllergen)
    {
        $request->validate([
            'allergen_type' => 'required|string|max:255',
        ]);

        $foodAllergen->update([
            'allergen_type' => $request->allergen_type,
        ]);

        return response()->json($foodAllergen, 200);
    }


    
    public function destroy(FoodAllergen $foodAllergen)
    {
        $foodAllergen->delete();
        return response()->json(null, 204);
    }
}

