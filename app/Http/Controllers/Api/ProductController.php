<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }



    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_image_url' => 'nullable|string|max:255',
            'product_description' => 'nullable|string',
            'product_price' => 'required|numeric',
            'flag_id' => 'nullable|exists:flags,id',
            'diet_id' => 'nullable|exists:diets,id',
            'allergen_type' => 'nullable|exists:food_allergens,allergen_type',
            'status' => 'nullable|string|max:255',
        ]);

        $product = Product::create([
            'product_name' => $request->product_name,
            'product_image_url' => $request->product_image_url,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'flag_id' => $request->flag_id,
            'diet_id' => $request->diet_id,
            'allergen_type' => $request->allergen_type,
            'status' => $request->status,
        ]);

        return response()->json($product, 201);
    }



    public function show(Product $product)
    {
        return response()->json($product);
    }


    public function edit(Product $product)
    {
        return response()->json($product);
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_image_url' => 'nullable|string|max:255',
            'product_description' => 'nullable|string',
            'product_price' => 'required|numeric',
            'flag_id' => 'nullable|exists:flags,id',
            'diet_id' => 'nullable|exists:diets,id',
            'allergen_type' => 'nullable|exists:food_allergens,allergen_type',
            'status' => 'nullable|string|max:255',
        ]);

        $product->update([
            'product_name' => $request->product_name,
            'product_image_url' => $request->product_image_url,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
            'flag_id' => $request->flag_id,
            'diet_id' => $request->diet_id,
            'allergen_type' => $request->allergen_type,
            'status' => $request->status,
        ]);

        return response()->json($product, 200);
    }




    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
