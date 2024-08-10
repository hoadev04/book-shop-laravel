@extends('layout')
@section('title', 'Thanh toán')
@section('content')

<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url('img/banner1.3.jpg');">
</section>
<!--slider sec end-->

<!-- START HEADING SECTION -->
<div class="about_content">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10  text-center text-lg-left wow slideInUp" data-wow-duration="2s">
                <h1 class="heading">Thanh toán</h1>
            </div>
        </div>
    </div>




    <!-- START SHOP CART SECTION -->
    <div class="shop-cart wow slideInUp" data-wow-duration="2s">
        <div class="container">
            @if (Session('success'))
            <div class="alert alert-success">
                {{ Session('success') }}
            </div>
            @endif


            <!-- START SHOP CART CHECKOUT FORM -->
            <form action="" method="POST" class="row pt-5">
                @csrf
                <div class="col-12 col-lg-6 wow slideInLeft" data-wow-duration="2s">
                    <div class="calculate-shipping">
                        <h4 class="heading">Thông tin nhận hàng</h4>
                        <div class="mb-3">
                            <label for="#" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên đăng nhập">
                        </div>
                        <div class="mb-3">
                            <label for="#" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Nhập email">
                        </div>
                        <div class="mb-3">
                            <label for="#" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" name="phone" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="mb-3">
                            <label for="#" class="form-label">Địa chỉ</label>
                            <textarea name="address" class="form-control" placeholder="Nhập địa chỉ"></textarea>
                        </div>
                        

                    </div>
                </div>
                <div class="col-12 col-lg-6 wow slideInRight" data-wow-duration="2s">
                    <div class="card-total">
                        <h4 class="heading">Thông tin đơn hàng</h4>
                        <table>
                            <tr>
                                <td>Sản phẩm</td>
                                <td class="text-center">Số lượng</td>
                                <td>Thành tiền</td>
                            </tr>
                            @php
                            $total_all = 0
                            @endphp
                            @foreach($cart as $item)
                            @php
                            $total = $item['price'] * $item['quantity'];
                            $total_all += $total;
                            @endphp
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <img class="mr-2" src="{{ asset('images/' . $item['image']) }}" alt="" width="50px">
                                        <p>{{ $item['name'] }}</p>
                                    </div>
                                </td>
                                <td class="text-center">x{{ $item['quantity'] }}</td>
                                <td>{{number_format($item['price'],3,'.',',') }} VND</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td>Phương thức:</td>
                                <td>
                                    <ul class="color-grey">
                                        <li>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="flat-rate-cash" name="payment_method" value="cash" class="custom-control-input" checked="">
                                                <label class="custom-control-label" for="flat-rate-cash">Thanh toán tiền mặt</label>
                                            </div>
                                            
                                        </li>


                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Tổng:</td>
                                <td>{{number_format($total_all ,3,'.',',') }} VND</td>
                            </tr>
                        </table>
                        <button type="submit" class="btn yellow-color-green-gradient-btn">Đặt hàng</button>
                    </div>
                </div>
            </form>
            <!-- END SHOP CART CHECKOUT FORM -->

        </div>
    </div>
    <!-- END SHOP CART SECTION-->

</div>
<!-- END HEADING SECTION -->

@endsection