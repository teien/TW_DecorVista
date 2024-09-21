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

    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('dashboard.homeowner.pages.productdetail',compact('product' , 'relatedProduct'));
   }
   public function filter(Request $request)
{
    $query = Product::query();

    if ($request->filled('name')) {
        $query->where('product_name', 'like', '%' . $request->name . '%');
    }

    if ($request->filled('price_min')) {
        $query->where('price', '>=', $request->price_min);
    }

    if ($request->filled('price_max')) {
        $query->where('price', '<=', $request->price_max);
    }

    $products = $query->get();

    return view('dashboard.homeowner.pages.product.products', compact('products'));
}

}
