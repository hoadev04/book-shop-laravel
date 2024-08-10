@extends('layout')
@section('title', 'Sản Phẩm')
@section('content')

    <!--slider sec strat-->
    <section id="slider-sec" class="slider-sec  parallax" style="background: url('../img/banner1.2.jpg');">
    </section>
    <!--slider sec end-->

    <!--Product Line Up Start -->
    <div class="product-listing">
        <div class="container">
            <div class="row no-gutters">

                <!-- START STICKY NAV -->
                <div class="col-12 col-lg-4 order-2 order-lg-1 sticky">
                    <div id="product-filter-nav" class="product-filter-nav mb-3">
                        <div class="product-category">
                            <h5 class="filter-heading  text-center text-lg-left">Danh mục</h5>
                            <ul>
                                @foreach ($categories as $cate)
                                    <li><a href="{{ route('productByCategory', $cate->id) }}">{{ $cate->name }} </a></li>
                                @endforeach
                            </ul>
                        </div>


                        <hr>
                        <!-- <div class="product-price mt-1">
                            <h5 class="filter-heading">Lọc theo giá</h5>
                            <div id="slider-range"></div>
                            <p class="price-num" style="color: #0b2e13;">Price: <span id="min-p"></span> <span id="max-p"></span></p>
                        </div>

                        <button class="btn yellow-color-green-gradient-btn mt-1">Lọc</button> -->

                        <div class="product-add mt-4">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <img src="img\advertisement.jpg" alt="images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END STICKY NAV -->

                <!-- START PRODUCT COL 8 -->
                <div class="col-md-12 col-lg-8 order-1 order-lg-2">
                    <div class="row">

                        <!-- START LISTING HEADING -->
                        <div class="col-12 product-listing-heading">
                            <h1 class="heading text-left">Danh sách sản phẩm</h1>
                            <p class="para_text text-left">Khám phá thế giới bí ẩn và kiến thức sâu rộng trong từng trang
                                sách. Hãy để chúng tôi dẫn dắt bạn vào
                                cuộc hành trình vô tận của tri thức và trải nghiệm những điều phi thường mỗi ngày.</p>
                        </div>
                        <!-- END LISTING HEADING -->

                        <!-- START PRODUCT LISTING SECTION -->
                        <div class="col-12 product-listing-products">

                            <!-- START DISPLAY PRODUCT -->
                            <div class="product-list row">
                                @foreach ($products as $items)
                                    <div class="col-12 col-md-6 col-lg-4 manage-color-hover wow slideInUp"
                                        data-wow-delay=".2s">
                                        <div class="product-item owl-theme product-listing-carousel owl-carousel">
                                            <div class="item p-item-img">
                                                <img src="{{ asset('images/' . $items->image) }}" alt="images" style="height: 300px">
                                                <div class="text-center d-flex justify-content-center align-items-center">
                                                    <form action="{{ route('add_cart') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $items->id }}">
                                                        <input type="hidden" name="qty" value="1">
                                                        <button type="submit" class="listing-cart-icon oubg-btn">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="mt-3 p-item-detail">
                                            <h4 class="text-center p-item-name"><a
                                                    href="{{ route('productDetail', $items->id) }}"> {{ $items->name }}
                                                </a></h4>
                                            <p class="text-center p-item-price">
                                                {{ number_format($items->price, 3, '.', ',') }} VND</p>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                            <!-- END DISPLAY PRODUCT -->


                        </div>
                        <!-- END PRODUCT LISTING SECTION -->
                    </div>

                    <div class="pagination">
                        <ul>
                            {{ $products->links('pagination::default') }}
                        </ul>
                    </div>

                </div>
                <!-- END PRODUCT COL 8 -->

            </div>
        </div>
    </div>
    <!--Product Line Up End-->

@endsection
