<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category= Category::all();
        return view ('categories.index')->with('category', $category);
    }
    public function create()
        {
            return view('categories.create');
        }
    public function store(Request $request)
        {
            $input = $request->all();
            Category::create($input);
            return redirect('category')->with('flash_message', 'category Addedd!');  
        }
        
        public function show($id)
        {
            $category = Category::find($id);
            return view('categories.show')->with('category', $category);
        }
        public function edit($id)
        {
            $category = Category::find($id);
            return view('categories.edit')->with('category', $category);
        }
      
        public function update(Request $request, $id)
        {
            $category = Category::find($id);
            $category->update($request->all());
            return redirect('category')->with('flash_message', 'Category updated!');
        }
        
        public function destroy($id)
        {
            Category::destroy($id);
            return redirect('category')->with('flash_message', 'category deleted!');  
        }
        
}
