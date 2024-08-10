@extends('layout')
@section('title', 'Trang chủ')
@section('content')


    @if (Session::has('ok'))
        <script>
            alert("{{ Session::get('ok') }}");
        </script>
    @endif

    @if (Session::has('no'))
        <script>
            alert("{{ Session::get('no') }}");
        </script>
    @endif
    <!--BANNER START-->
    <div class="homer-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center text-center text-lg-left">
                    <div class="banner-description">
                        <span class="small-heading animated fadeInRight delay-1s">PHÙ HỢP NHẤT</span>
                        <h1 class="w-sm-100 w-md-100 w-lg-25 animated fadeInLeft delay-1s">BOOKS <span>COLLECTION</span></h1>
                        <a href="product-listing.html" class="btn animated fadeInLeft delay-1s">MUA NGAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--BANNER END-->

    <!--START OUR SERVICES-->
    <div class="our-services">
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="service">
                        <div class="media">
                            <div class="service-card">
                                <i class="fas fa-truck mr-3"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Miễn phí vận chuyển</h5>
                                    <span>Đặt hàng trên 500k</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="service">
                        <div class="media">
                            <div class="service-card">
                                <i class="fas fa-undo mr-3"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Đảm bảo hoàn tiền</h5>
                                    <span>100% hoàn lại tiền</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="service">
                        <div class="media">
                            <div class="service-card">
                                <i class="fas fa-piggy-bank mr-3"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Thanh toán </h5>
                                    <span>Khi giao hàng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="service">
                        <div class="media">
                            <div class="service-card">
                                <i class="fas fa-hands-helping mr-3"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Trợ giúp & Hỗ trợ</h5>
                                    <span>Call us: +0123,4567.89</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END OUR SERVICES-->



    <!-- START PORTOLIO SECTION -->
    <div class="portfolio-section">
        <div class="container">
            <div class="row">

                <!-- START PORTFOLIO HEADING -->
                <div class="col-12 mb-5">
                    <div class="portfolioHeading text-center">
                        <h1 class="high-lighted-heading">Sách bán chạy nhất</h1>
                    </div>
                </div>
                <!-- END PORTFOLIO HEADING -->


                <!-- START PORTFOLIO IMAGES -->
                <div class="col-12">
                    <div id="js-grid-blog-posts" class="cbp">

                        @foreach ($bestSellingProducts as $bestSelling)
                            <div class="cbp-item Classic Fantasy ">
                                <form action="{{ route('add_cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $bestSelling->id }}">
                                    <input type="hidden" name="qty" value="1">
                                    <button type="submit" class="portfolio-circle-cart oubg-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </form>

                                <div class="item"> <a href="{{ route('productDetail', $bestSelling->id) }}"
                                        class="cbp-caption"><img src="{{ asset('images/' . $bestSelling->image) }}"
                                            alt="Book 1"></a></div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="cbp-l-grid-blog-title"><a
                                                href="{{ route('productDetail', $bestSelling->id) }}"
                                                class="portfolio-title">{{ $bestSelling->name }}</a></div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <div class="cbp-l-grid-blog-desc portfolio-des">
                                            {{ number_format($bestSelling->price, 3, '.', ',') }} VND</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END PORTFOLIO IMAGES -->

            </div>
        </div>
    </div>
    <!-- END PORTOLIO SECTION -->

    <!--START BANNER SECTION-->
    <div class="banner-section parallax-slide">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 text-center text-lg-left">
                    <div class="banner-content-wrapper">
                        <span>SẢN PHẨM HOT NHẤT TRONG TUẦN</span>
                        <h1>Books <span>Collections</span></h1>
                        <p>"Tinh thần phiêu lưu đang chờ đón bạn! Khám phá những trang sách nóng hổi nhất trong tuần và hòa
                            mình vào thế giới không gian mới mẻ, tri thức sẽ đưa bạn đến những cuộc phiêu lưu không giới
                            hạn."</p>
                        <button type="button" class="btn green-color-yellow-gradient-btn">Mua Ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END BANNER SECTION-->

    <!--START LATEST ARRIVALS-->
    <div class="lastest_arrivals">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1>Sách vừa sản xuất</h1>
                </div>

                <div class="col-12">
                    <div class="lastest_featured_products owl-carousel owl-theme">

                        @foreach ($newProducts as $view)
                            <div class="lastest_arrival_items item">
                                <form action="{{ route('add_cart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $view->id }}">
                                    <input type="hidden" name="qty" value="1">
                                    <button type="submit" class="lastest-addto-cart oubg-btn">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                </form>

                                <div class="card">
                                    <span class="product-type">SALE</span>
                                    <div class="image-holder">
                                        <a href="{{ route('productDetail', $view->id) }}"
                                            data-fancybox="lastest_product" data-title="Shirt Name" >
                                            <img src="{{ asset('images/' . $view->image) }}" class="card-img-top"
                                                alt="Lastest Arrivals 1" style="height: 300px">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 text-center">
                                                <h5 class="card-title"> <a
                                                        href="{{ route('productDetail', $view->id) }}">{{ $view->name }}</a>
                                                </h5>
                                            </div>
                                            <div class="col-12 text-center">
                                                <p class="card-text"> {{ number_format($view->price, 3, '.', ',') }} VND
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--END LATEST ARRIVALS-->


    <div class="search-box-overlay ">
        <a><i class="fas fa-times cross-sign" id="close-window"></i></a>
    
        <div class="container">
            <div class="row">
                <div class="col-12 search-col">
                    <form action="{{ route('home') }}">
                        <div class="input-group search-box-form">
                            <input type="text" name="key" class="form-control" placeholder="Tìm kiếm ở đây..."
                                aria-label="Search Here">
                            <div class="input-group-prepend">
                                <button class="input-group-text" type="submit" id="basic-addon1"><i
                                        class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
    
                <div class="search-listing row">
                    <div class="col-12 mb-4">
                        <h4 class="">Kết quả tìm kiếm</h4>
                    </div>
                    <div class="col-12">
                    
                    
                        <div class="listing-search-scroll ">
                    
                            @foreach ($prods as $items)
                                <div class="media row">
                                    <div class="img-holder ml-1 mr-2 col-4">
                                        <a href="{{ route('productDetail', $items->id) }}">
                                            <img src="{{ asset('images/' . $items->image) }}" class="align-self-center" alt="cartitem">
                                        </a>
                    
                                    </div>
                                    <div class="media-body mt-auto mb-auto col-8">
                                        <h5 class="name"><a href="{{ route('productDetail', $items->id) }}"> {{ $items->name }}
                                            </a></h5>
                                        <p class="category">{{ $items->Category->name }}</p>
                                        <a class="btn black-sm-btn" href="shop-cart.html"><i class="fas fa-shopping-bag"></i></a>
                                        <a class="btn black-sm-btn" href="javascript:void(0)"><i class="fas fa-eye"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </div>

@endsection
