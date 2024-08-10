@extends('layout')
@section('title', 'Lịch sử đơn hàng')
@section('content')


<!--slider sec strat-->
<section id="slider-sec" class="slider-sec  parallax" style="background: url('../img/banner1.2.jpg');">
</section>
<!--slider sec end-->

<div class="container mt-5 mb-5">
    <h2 class="mb-4">Lịch sử đơn hàng</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Ngày đặt hàng</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tổng số tiền</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>

            @foreach($auth->order as $item)
            <tr>
                <td>DH{{$item->id}}</td>
                <td>{{ $item->created_at->format('d/m/y') }}</td>
                <td>
                    @if( $item->status == 0)
                    <span>Chưa xác nhận</span>
                    @elseif ($item->status == 1)
                    <span>Đã xác nhận</span>
                    @elseif( $item->status == 2)
                    <span>Đang giao hàng</span>
                    @elseif( $item->status == 3)
                    <span>Đã giao hàng</span>
                    @else
                    <span>Đã hủy</span>
                    @endif
                </td>
                <td>
                    {{number_format($item -> totalPrice,3,'.',',') }}đ
                </td>
                <td>
                    <a href="{{ route('detail', $item->id)}}">Chi tiết</a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection