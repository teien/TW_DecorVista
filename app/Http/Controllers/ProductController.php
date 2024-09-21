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
   public function filter(Request $request)
{
    // Bắt đầu với một query trống từ model Product
    $query = Product::query();

    // Nếu có lọc theo tên
    if ($request->filled('name')) {
        $query->where('product_name', 'like', '%' . $request->name . '%');
    }

    // Nếu có lọc theo giá tối thiểu
    if ($request->filled('price_min')) {
        $query->where('price', '>=', $request->price_min);
    }

    // Nếu có lọc theo giá tối đa
    if ($request->filled('price_max')) {
        $query->where('price', '<=', $request->price_max);
    }

    // Lấy danh sách sản phẩm sau khi đã lọc
    $products = $query->get();

    // Trả kết quả về view products.index
    return view('dashboard.homeowner.pages.product.products', compact('products'));
}

}
