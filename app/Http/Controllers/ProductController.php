<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::with('category')->get();
        return view('products.index')->with('products', $products);
    }
    

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        // Check if 'category_id' is provided in the request
        if (!$request->has('category_id')) {
            // Handle the case where category_id is missing
            return redirect()->back()->with('error', 'Please select a category.');
        }

        Products::create($input);
        return redirect('products')->with('flash_message', 'Product added!');
    }

    public function show($id)
    {
        $product = Products::find($id);
        return view('products.show')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Products::find($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Products::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('products')->with('flash_message', 'Product updated!');
    }

    public function destroy($id)
    {
        Products::destroy($id);
        return redirect('products')->with('flash_message', 'Product deleted!');
    }
}
