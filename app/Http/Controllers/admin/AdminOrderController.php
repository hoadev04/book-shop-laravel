<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function order () {
        $orders = Order::orderBy('id', 'DESC')->paginate();

        return view('admin.order', compact('orders'));
    }

    public function order_show (Order $order) {
        return view('admin.orderDetail', compact( 'order'));
    }

    public function updateStatus(Request $request) {
        $order = Order::find($request->order_id);
        if ($order) {
            $order->status = $request->input('status');
            $order->save();
            return  redirect()->route('order')->with('ok', 'Xác nhận thành công!');
            
        }
        return redirect()->back()->with('success', 'Cập nhật trạng thái đơn hàng thành công!');
    }
}
