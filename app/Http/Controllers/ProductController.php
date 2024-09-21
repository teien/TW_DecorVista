<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
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
