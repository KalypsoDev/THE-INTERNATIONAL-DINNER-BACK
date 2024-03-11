<?php

namespace App\Http\Controllers\API;

use App\Models\Bill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillController extends Controller
{

    public function index()
    {
        $bills = Bill::all();
        return response()->json($bills);
    }


    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'units_quantity' => 'required|integer',
            'total_sale_price' => 'required|numeric',
            'status' => 'required|string|max:255',
        ]);

        $bill = Bill::create([
            'user_id' => $request->user_id,
            'units_quantity' => $request->units_quantity,
            'total_sale_price' => $request->total_sale_price,
            'status' => $request->status,
        ]);

        return response()->json($bill, 201);
    }



    public function show(Bill $bill)
    {
        return response()->json($bill);
    }


    public function edit(Bill $bill)
    {
        return response()->json($bill);
    }




    public function update(Request $request, Bill $bill)
    {
        $request->validate([
            'user_id' => 'sometimes|required|exists:users,id',
            'units_quantity' => 'sometimes|required|integer',
            'total_sale_price' => 'sometimes|required|numeric',
            'status' => 'sometimes|required|string|max:255',
        ]);

        $bill->update($request->all());

        return response()->json($bill, 200);
    }


    public function destroy(Bill $bill)
    {
        $bill->delete();
        return response()->json(null, 204);
    }
}
