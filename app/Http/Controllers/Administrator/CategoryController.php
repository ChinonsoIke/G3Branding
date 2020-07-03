<?php

namespace App\Http\Controllers\Administrator;

use App\Category;
use App\Product;
use App\ProductPrice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'desc')->get();
        return view('backend.categories.index', compact('categories', 'products'));
    }

    public function details(Category $category)
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('backend.categories.details', compact('category', 'products'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);
        if ($request->hasFile('image')) {
            if (file_exists('uploads/categories/' . $category->image)) {
                unlink('uploads/categories/' . $category->image);
            }
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save('uploads/categories/' . $fileName);
            $data['image'] = $fileName;
        }
        $category->update($data);
        $category->products()->sync($request->products);
        return back()->with('success', 'Category updated successfully');
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image'
        ]);
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save('uploads/categories/' . $fileName);
            $data['image'] = $fileName;
        }
        $category = Category::create($data);
        $category->products()->sync($request->products);
        return redirect(route('admin.categories.details', $category))->with('success', 'Category added successfully');
    }

}
