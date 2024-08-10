@extends('layout')
@section('title', 'Chi tiết đơn hàng')
@section('content')


<!--slider sec strat-->
<section id="slider-sec" class="slider-sec  parallax" style="background: url('../img/banner1.2.jpg');">
</section>
<!--slider sec end-->

<div class="container mt-5 mb-5">
  <h2 class="mb-4">Chi tiết đơn hàng</h2>
  <div class="card mb-4">
    <div class="card-header">
      <strong>Mã đơn hàng:</strong> DH{{$order->id}}
    </div>
    <div class="card-body">
      <p><strong>Ngày đặt hàng:</strong> {{ $order->created_at->format('d/m/y') }}</p>
      <p><strong>Trạng thái:</strong>
        @if( $order->status == 0)
        <span>Chưa xác nhận</span>
        @elseif ($order->status == 1)
        <span>Đã xác nhận</span>
        @elseif( $order->status == 2)
        <span>Đang giao hàng</span>
        @elseif( $order->status == 3)
        <span>Đã giao hàng</span>
        @else
        <span>Đã hủy</span>
        @endif
      </p>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-header">
      <strong>Thông tin sản phẩm</strong>
    </div>
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
        <tbody>
          @foreach($order->detail as $item)
          <tr>
            <td><img src="{{ asset('images/'. $item->product->image)}}" alt="thumnails" width="60px"></td>
            <td>{{$item->product->name}}</td>
            <td>{{ $item->quantity}}</td>
            <td>{{number_format($item -> price,3,'.',',') }}đ</td>
            <td>{{number_format($item -> quantity * $item -> price,3,'.',',') }}đ</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <p class="text-right"><strong>Tổng số tiền:</strong> {{number_format($order -> totalPrice,3,'.',',') }}đ</p>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-header">
      <strong>Thông tin giao hàng</strong>
    </div>
    <div class="card-body">
      <p><strong>Người nhận:</strong> {{ $order->name }}</p>
      <p><strong>Số điện thoại:</strong> {{ $order->phone }}</p>
      <p><strong>Địa chỉ:</strong> {{ $order->address }}</p>

    </div>
  </div>
@if($order->status==5)
<button class="btn green-color-yellow-gradient-btn" disabled>Hủy đơn hàng</button>

@else
@if($order->status != 2 && $order->status != 3)
  <a href="{{ route('huyDh', $order->id)}}?status=5" class="btn green-color-yellow-gradient-btn" onclick="return alert('Bạn có chắc muốn hủy đơn hàng này không')">Hủy đơn hàng</a>
  <button class="btn green-color-yellow-gradient-btn" disabled>Hủy đơn hàng</button>
  @else
  <button class="btn green-color-yellow-gradient-btn" disabled>Hủy đơn hàng</button>
  @endif

@endif
  
  <a href="{{ route('history')}}" class="btn green-color-yellow-gradient-btn">Quay lại lịch sử đơn hàng</a>
</div>

@endsection