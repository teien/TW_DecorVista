<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;

class CartService
{
    // Thêm sản phẩm vào giỏ hàng
    public function addToCart($product)
    {
        $cart = Session::get('cart', []); 
        $cart[] = $product;
        Session::put('cart', $cart);
    }

    // Lấy sản phẩm trong giỏ hàng
    public function getCart()
    {
        return Session::get('cart', []); // Trả về giỏ hàng, hoặc mảng rỗng nếu không có gì
    }

    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart($productId)
    {
        $cart = Session::get('cart', []);
        $cart = array_filter($cart, function ($item) use ($productId) {
            return $item['id'] !== $productId;
        });
        Session::put('cart', $cart); 
    }
}
