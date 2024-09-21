<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('dashboard.homeowner.pages.product.products', compact('products'));

    }
    public function show(string $id){
        $product = Product::where('id','=',$id)->select('*')->first();
        $product = Product::findOrFail($id);
        $relatedProduct = Product::where('category', $product->category)
        ->where('id', '!=', $product->id)
        ->take(4)
        ->get();

        return view('dashboard.homeowner.pages.productdetail',compact('product' , 'relatedProduct'));
   }
}
