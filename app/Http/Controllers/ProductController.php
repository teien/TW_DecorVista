<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Hiển thị danh sách sản phẩm
    public function index()
    {
        $products = Product::all(); // Lấy tất cả sản phẩm từ cơ sở dữ liệu
        return view('dashboard.homeowner.pages.product.products', compact('products'));
    }

    // Hiển thị chi tiết sản phẩm
    public function show(string $id)
    {
        // Lấy sản phẩm theo ID, nếu không tìm thấy sẽ trả về 404
        $product = Product::findOrFail($id);

        // Lấy các sản phẩm liên quan
        $relatedProducts = Product::where('category', $product->category)
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
