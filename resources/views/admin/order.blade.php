@extends('admin.layout')
@section('title', 'Đơn hàng')
@section('content')

<div class="main-content">
    <h3 class="title-page">
        Quản lí đơn hàng
    </h3>
    <table id="example" class="table " style="width:100%">
        <thead>
            <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Ngày đặt hàng</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tổng số tiền</th>

                <th scope="col">Xem chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $item)
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
                
                <td><a href="{{ route('order_details', $item->id)}}" class="btn btn-primary">Chi tiết</a></td>
            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr>
                <th scope="col">Mã đơn hàng</th>
                <th scope="col">Ngày đặt hàng</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tổng số tiền</th>
                <th scope="col">Xem chi tiết</th>

            </tr>
        </tfoot>
    </table>
</div>

@endsection