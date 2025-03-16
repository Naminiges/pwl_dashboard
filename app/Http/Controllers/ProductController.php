<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = [
            ['name' => 'Apple MacBook Pro 17"', 'color' => 'Silver', 'category' => 'Laptop', 'price' => '$2999'],
            ['name' => 'Microsoft Surface Pro', 'color' => 'White', 'category' => 'Laptop PC', 'price' => '$1999'],
            ['name' => 'Magic Mouse 2', 'color' => 'Black', 'category' => 'Accessories', 'price' => '$99'],
            ['name' => 'Google Pixel Phone', 'color' => 'Gray', 'category' => 'Phone', 'price' => '$799'],
            ['name' => 'Apple Watch 5', 'color' => 'Red', 'category' => 'Wearables', 'price' => '$999'],
        ];

        return view('dashboard', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
