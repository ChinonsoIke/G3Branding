<?php

namespace App\Http\Controllers\Administrator;

use App\Category;
use App\CategoryPrice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.categories.index', compact('categories'));
    }

    public function details(Category $category)
    {
        return view('backend.categories.details', compact('category'));
    }

    public function update(Request $request, Category $category)
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
        $category->update($data);
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
        return redirect(route('admin.categories.details', $category))->with('success', 'Category added successfully');
    }

    public function updatePrice(Request $request)
    {
        $categoryPrice = CategoryPrice::findOrFail($request->pk);
        $field = $request->name;
        $categoryPrice->$field = $request->value;
        $categoryPrice->save();
        return true;
    }

    public function createPrice(Request $request, Category $category)
    {
        $data = $this->validate($request, [
           'quantity' => 'required',
           'cost' => 'required|numeric'
        ]);

        $category->prices()->create($data);

        return back()->with('success', 'Price added successfully');
    }

    public function deletePrice(Request $request)
    {
        CategoryPrice::destroy($request->id);
        return back()->with('success', 'Price deleted successfully');
    }
}
