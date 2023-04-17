<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class Product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Orders::all();
        return view('product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product1' => 'required',
            'price_product1' => 'required',
            'product2' => 'required',
            'price_product2' => 'required',
            'product3' => 'required',
            'price_product3' => 'required',
            'product4' => 'required',
            'price_product4' => 'required',
            'product4' => 'required',
            'price_product4' => 'required'
        ]);

        Orders::create($request->post());
        $data = Orders::all();
        return view('product.index', compact('data'));        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Orders::findorfail($id);
        
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = Orders::findorfail($id);

        $request->validate([
            'product1' => 'required',
            'price_product1' => 'required',
            'product2' => 'required',
            'price_product2' => 'required',
            'product3' => 'required',
            'price_product3' => 'required',
            'product4' => 'required',
            'price_product4' => 'required',
            'product4' => 'required',
            'price_product4' => 'required'
        ]);

        $update->fill($request->post())->save();
        
        $data = Orders::all();
        return view('product.index', compact('data'));    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = Orders::findorfail($id);
        $delete->delete();
        $data = Orders::all();
        return view('product.index', compact('data'));        

    }
}