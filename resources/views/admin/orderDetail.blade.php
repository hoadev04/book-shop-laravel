@extends('admin.layout')
@section('title', 'Chi tiết đơn hàng')
@section('content')



<div class="main-content">
    <h3 class="title-page">
        Chi tiết đơn hàng
    </h3>

    <div class="card mb-4">
        <div class="card-header"> <strong>Mã đơn hàng:</strong> DH{{$order->id}} </div>
        <div class="card-body">
            <p><strong>Ngày đặt hàng:</strong> {{ $order->created_at->format('d/m/y') }}</p>
            <p > <strong>Trạng thái:</strong></p>
                <form action="/detal/update" method="post">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order->id }}">
                    <div class="form-group col-2">
                        <select class="form-control " name="status" id="status">

                        @if ($order->status == 5)
                            <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Chưa xác nhận</option>
                            <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Đã xác nhận</option>
                            <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Đang giao hàng</option>
                            <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Đã giao hàng</option>
                            
                            @else 
                            <option value="0" {{ $order->status == 0 ? 'selected' : '' }}>Chưa xác nhận</option>
                            <option value="1" {{ $order->status == 1 ? 'selected' : '' }}>Đã xác nhận</option>
                            <option value="2" {{ $order->status == 2 ? 'selected' : '' }}>Đang giao hàng</option>
                            <option value="3" {{ $order->status == 3 ? 'selected' : '' }}>Đã giao hàng</option>
                            <option value="5" {{ $order->status == 5 ? 'selected' : '' }} {{ $order->status == 2 || $order->status == 3 ?  'disabled' : '' }}>Đã hủy</option>
                            @endif
                        </select>
                       
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Cập nhật</button>
                </form>
                
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header"> <strong>Thông tin sản phẩm</strong> </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody> @foreach($order->detail as $item) <tr>
                        <td><img src="{{ asset('images/'. $item->product->image)}}" alt="thumnails" width="60px"></td>
                        <td>{{$item->product->name}}</td>
                        <td>{{ $item->quantity}}</td>
                        <td>{{number_format($item -> price,3,'.',',') }}đ</td>
                        <td>{{number_format($item -> quantity * $item -> price,3,'.',',') }}đ</td>
                    </tr> @endforeach </tbody>
            </table>
            <p class="text-right"><strong>Tổng số tiền:</strong> {{number_format($order -> totalPrice,3,'.',',') }}đ</p>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header"> <strong>Thông tin giao hàng</strong> </div>
        <div class="card-body">
            <p><strong>Người nhận:</strong> {{ $order->name }}</p>
            <p><strong>Số điện thoại:</strong> {{ $order->phone }}</p>
            <p><strong>Địa chỉ:</strong> {{ $order->address }}</p>
        </div>
    </div>
</div>

@endsection