<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        Product::createOrUpdate($request);
        return response()->json([
            'status'=>'success'
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Product::createOrUpdate($request);
        return response()->json([
            'status'=>'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Product::find($request->id)->delete();
        return response()->json([
            'status'=>'warning'
        ]);
    }
}
