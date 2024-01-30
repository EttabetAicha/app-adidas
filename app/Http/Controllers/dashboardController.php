<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class dashboardController extends Controller
{
    public function index()
    {
        $products = Products::with('category')->get();
        return view('dashboard', ['products' => $products]);
    }
}
