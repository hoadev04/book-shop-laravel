<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CheckoutController extends Controller

{
    public function checkout(Request $request)
    {

        $cart = $request->session()->get('cart', []);
        $auth = Auth::user();

        return view('checkout', compact('auth', 'cart'));
    }

    public function post_checkout(Request $request, Cart $cart)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required'
        ]);

        $data = $request->only('name', 'email', 'phone', 'address');
        $data['user_id'] = Auth::user()->id;
        $data['buy_date'] = Carbon::now();

        $cart = session()->get('cart', []);

        if ($order = Order::create($data)) {
            $token = Str::random(40);
            foreach ($cart as $dataCart) {
                $data_1 = [
                    'order_id' => $order->id,
                    'product_id' => $dataCart['id'],
                    'price' => $dataCart['price'],
                    'quantity' => $dataCart['quantity'],
                    'status' => 0 ,
                    'payment_method' => 'Tiền mặt'
                ];

                OrderDetail::create($data_1);
            }

            session()->forget('cart');


            $order->token = $token;
            $order->save();
            Mail::to(Auth::user()->email)->send(new OrderMail($order, $token));
        }

        return redirect()->route('checkout')->with('success', 'Đặt hàng thành công!');
    }


    public function verify($token)
    {
        $order = Order::where('token', $token)->first();
        // dd($order);
        if ($order) {
            $order->token = null;
            $order->status = 1;
            $order->save();

            return  redirect()->route('home')->with('ok', 'Xác nhận thành công!');
        }

        return  redirect()->back()->with('no', 'Xác nhận không thành công!');
    }


    public function history()
    {
        $auth = Auth::user();
        return view('history', compact('auth'));
    }

    public function detail(Order $order)
    {
        $auth = Auth::user();
        return view('orderDetail', compact('auth', 'order'));
    }


    public function huyDh(Order $order)
    {
        $auth = Auth::user();
        $status = request('status');
        $order->update(['status' => $status]);
        return  redirect()->route('home')->with('ok', 'Hủy đơn hàng thành công!');
    }


}
