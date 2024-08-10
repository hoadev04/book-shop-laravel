<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function cart(Cart $cart)
    {
        $auth = Auth::user();
        return view('cart', compact('cart', 'auth'));
    }

    public function addToCart(Request $request, Cart $cart)
    {
        $product = Product::find($request->id);
        $quantity = $request->qty;
        $cart->add($product, $quantity);

        return redirect()->route('cart');
    }

    public function delCart($id,  Cart $cart)
    {
        $cart->delete($id);
        return redirect()->route('cart');
    }

    public function updateCart(Request $request, Cart $cart)
    {
        $data = $request->all();
        $cart->update($data['cart_qty']);
        
        return redirect()->route('cart');
        
    }

    

    
}


