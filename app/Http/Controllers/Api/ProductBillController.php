<?php

namespace App\Http\Controllers\API;

use App\Models\ProductBill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductBillController extends Controller
{


    public function index()
    {
        $productBills = ProductBill::all();
        return response()->json($productBills);
    }



    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'bill_id' => 'required|exists:bills,id',
            'sale_date' => 'required|date',
            'product_quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $productBill = ProductBill::create([
            'product_id' => $request->product_id,
            'bill_id' => $request->bill_id,
            'sale_date' => $request->sale_date,
            'product_quantity' => $request->product_quantity,
            'price' => $request->price,
        ]);

        return response()->json($productBill, 201);
    }



    public function show(ProductBill $productBill)
    {
        return response()->json($productBill);
    }

    public function edit(ProductBill $productBill)
    {
        return response()->json($productBill);
    }




    public function update(Request $request, ProductBill $productBill)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'bill_id' => 'required|exists:bills,id',
            'sale_date' => 'required|date',
            'product_quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $productBill->update([
            'product_id' => $request->product_id,
            'bill_id' => $request->bill_id,
            'sale_date' => $request->sale_date,
            'product_quantity' => $request->product_quantity,
            'price' => $request->price,
        ]);

        return response()->json($productBill, 200);
    }




    public function destroy(ProductBill $productBill)
    {
        $productBill->delete();
        return response()->json(null, 204);
    }
}
