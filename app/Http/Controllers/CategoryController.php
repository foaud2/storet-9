<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\category;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.create',compact('categories'));
    }


    public function store(Request $request)
    {
        $categories = new Category;
        $categories->name = $request->name;
        $categories->save();
        return redirect()->back();
    }
    public function show(Product $product) {}
    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit', compact('category'));


    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;

        $category->save();
        return redirect('categories');
    }
    public function destroy($id)
    
    {
        Category::find($id)->delete();
        return redirect()->back();
    }
}
