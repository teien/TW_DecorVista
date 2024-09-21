<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // Hiển thị giỏ hàng
    public function showCart()
    {
        $cartItems = session()->get('cart', []);
        if (!is_array($cartItems)) {
            $cartItems = [];
        }

        // Tính tổng giá
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }

        return view('dashboard.homeowner.pages.use.shoppingcart', compact('cartItems', 'totalPrice'));
    }

    // Thêm sản phẩm vào giỏ hàng
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Sản phẩm không tồn tại.'], 404);
        }
    
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image_url' => $product->image_url,
                'quantity' => 1,
            ];
        }
    
        session()->put('cart', $cart);
        return response()->json(['success' => true, 'message' => 'Sản phẩm đã được thêm vào giỏ hàng.']);
    }
    

    // Xóa sản phẩm khỏi giỏ hàng
    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
        }

        return redirect()->back()->with('error', 'Sản phẩm không tồn tại trong giỏ hàng.');
    }

    // Cập nhật số lượng sản phẩm
    public function updateQuantity(Request $request, $id)
    {
        $quantity = $request->input('quantity');
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $quantity;
            session()->put('cart', $cart);
            return response()->json(['success' => true, 'message' => 'Cập nhật thành công']);
        }

        return response()->json(['success' => false, 'message' => 'Sản phẩm không tồn tại']);
    }
}