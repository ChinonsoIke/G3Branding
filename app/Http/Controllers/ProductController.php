<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //
    public function categoryindex()
    {
        $categories = Category::all();
        $products = Product::where("id","<>","")->paginate(6);
        //dd($products);
        return view('products.index',compact("categories","products"));
    }
    public function productdetails(Request $request)
    {

        $categories = Category::all();
        $product = Product::find($request->id);
        
        return view('products.detail',compact("categories","product"));
    }
}
