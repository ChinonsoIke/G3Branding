<?php

namespace App\Http\Controllers\Administrator;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Product\NewProductRequest;
use App\Product;
use App\ProductPrice;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $categories = Category::all();
        return view('backend.products.index', compact('products', 'categories'));
    }

    public function create(NewProductRequest $request)
    {
        $data = $request->only('title', 'slug', 'description');
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save('uploads/products/' . $fileName);
            $data['image'] = $fileName;
        }
        $product = Product::create($data);
        $product->categories()->sync($request->categories);

        return redirect(route('admin.products.details', $product))->with('success', 'Product added successfully');
    }

    public function update(NewProductRequest $request, Product $product)
    {
        $data = $request->only('title', 'description');
        if ($request->hasFile('image')) {
            if (file_exists('uploads/products/' . $product->image)) {
                unlink('uploads/products/' . $product->image);
            }
            $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->save('uploads/products/' . $fileName);
            $data['image'] = $fileName;
        }
        $product->update($data);
        $product->categories()->sync($request->categories);
        return back()->with('success', 'Product updated successfully');
    }

    public function details(Product $product)
    {
        $categories = Category::all();
        return view('backend.products.details', compact('product', 'categories'));
    }

    public function updatePrice(Request $request)
    {
        $categoryPrice = ProductPrice::findOrFail($request->pk);
        $field = $request->name;
        $categoryPrice->$field = $request->value;
        $categoryPrice->save();
        return true;
    }

    public function createPrice(Request $request, Product $product)
    {
        $data = $this->validate($request, [
            'quantity' => 'required',
            'cost' => 'required|numeric'
        ]);

        $product->prices()->create($data);

        return back()->with('success', 'Price added successfully');
    }

    public function deletePrice(Request $request)
    {
        ProductPrice::destroy($request->id);
        return back()->with('success', 'Price deleted successfully');
    }
}
