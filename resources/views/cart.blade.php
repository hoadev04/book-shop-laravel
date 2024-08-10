@extends('layout')
@section('title', 'Giỏ hàng')
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
                <h1 class="heading">Giỏ hàng của bạn</h1>
            </div>
        </div>
    </div>


    <!-- START SHOP CART SECTION -->
    <div class="shop-cart wow slideInUp" data-wow-duration="2s">
        <div class="container">
            <!-- START SHOP CART TABLE -->
            <div class="row pt-2">
                <div class="col-12 col-md-12  cart_table wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                    <form action="{{ route('update_cart')}}" method="post">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-bordered border-radius">
                                <thead>
                                    <tr>
                                        <th class="darkcolor">Sản phẩm</th>
                                        <th class="darkcolor">Giá</th>
                                        <th class="darkcolor">Số lượng</th>
                                        <th class="darkcolor">Tổng tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cart->list_cart() as $item)
                                    <tr>
                                        <td>
                                            <div class="d-table product-detail-cart">

                                                <div class="media">
                                                    <div class="row justify-content-between align-items-center">

                                                        <div class="col-12 col-lg-2 product-detail-cart-image">
                                                            <a class="shopping-product" href="#"><img src="{{ asset('images/' . $item['image']) }}" alt="Generic placeholder image"></a>
                                                        </div>

                                                        <div class="col-12 col-lg-10 ">
                                                            <div class="ml-lg-3 text-center">
                                                                <h4 class="product-name"><a href="product-detail.html">{{ $item['name']}}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h4 class="text-center amount">{{number_format($item['price'],3,'.',',') }} VND</h4>
                                        </td>
                                        <td class="text-center">
                                            <div class="quote text-center mt-1">
                                                <input type="number" name="cart_qty[{{ $item['id'] }}]" value="{{ $item['quantity'] }}" class="quote" min="1" max="100">
                                            </div>
                                        </td>
                                        <td>
                                            <h4 class="text-center amount">{{number_format($item['price'] *  $item['quantity'],3,'.',',') }} VND</h4>
                                        </td>
                                        <td class="text-center">

                                            <a href="{{ route('del_cart', $item['id']) }}" onclick="return confirm('Bạn có chắc chắn xóa sản phẩm này không?')" class="btn-close ">
                                                <i class="lni-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="apply_coupon">
                            <div class="row">
                                <div class="col-10 text-left">
                                    <a href="{{ route('productList') }}" class="btn green-color-yellow-gradient-btn ">Tiếp tục mua hàng</a>
                                    <button class="btn green-color-yellow-gradient-btn oubg-btn">Cập Nhật</button>
                                    <a href="{{ route('checkout') }}" class="btn green-color-yellow-gradient-btn ">Thanh Toán</a>
                                </div>


                                <div class="col-2 text-center">
                                    <h5><b>Tổng tiền</b></h5>
                                    <p>{{number_format($cart -> totalPrice,3,'.',',') }} VND</p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- END SHOP CART TABLE -->



        </div>
        <!-- END SHOP CART SECTION-->

    </div>
    <!-- END HEADING SECTION -->

    @endsection