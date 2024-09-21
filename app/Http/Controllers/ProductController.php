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

        // Trả về view chi tiết sản phẩm
        return view('dashboard.homeowner.pages.productdetail', compact('product', 'relatedProducts'));
    }
}
