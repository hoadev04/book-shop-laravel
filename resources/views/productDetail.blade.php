@extends('layout')
@section('title', 'Chi Tiết Sản Phẩm')
@section('content')


    <style>
        .detail-hhha {
            background: url("{{ asset('img/banner1.1.jpg') }} ");
        }
    </style>

    <!--slider sec strat-->
    <section id="slider-sec" class="slider-sec parallax detail-hhha">
        <!-- <img src="{{ asset('img/banner1.1.jpg') }}" alt=""> -->
    </section>
    <!--slider sec end-->

    <!-- START HEADING SECTION -->
    <div class="about_content">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="product-body">
                        <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb text-center text-lg-left">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Categories</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0)">Books</a></li>
                                    <li class="breadcrumb-item"><a class="active" href="javascript:void(0)">The Road</a></li>
                                </ol>
                            </nav> -->
                        <div class="pro-detail-sec row">
                            <div class="col-12">
                                <h4 class="pro-heading text-center text-lg-left">Books Collections</h4>
                                <p class="pro-text text-center text-lg-left">"Bước vào thế giới của tri thức và sự phiêu lưu
                                    không giới hạn
                                    với bộ sưu tập sách đa dạng của chúng tôi. Mở cánh cửa tới những trang sách, mở ra cả
                                    một vũ trụ tri thức mới."</p>
                            </div>
                        </div>
                        <div class="row product-list product-detail">

                            <div class="col-12 col-lg-6 product-detail-slider">
                                <div class="wrapper">
                                    <div class="Gallery swiper-container img-magnifier-container" id="gallery">
                                        <div class="swiper-wrapper myimgs">
                                            <div class="swiper-slide"> <a href="img\book-1-1.jpg" data-fancybox="1"
                                                    title="Zoom In"><img class="myimage"
                                                        src="{{ asset('images/' . $product->image) }}" alt="gallery"></a>
                                            </div>
                                            <div class="swiper-slide"> <a href="img\book-1.jpg" data-fancybox="2"
                                                    title="Zoom In"><img class="myimage"
                                                        src="{{ asset('images/' . $product->image) }}" alt="thumnails"></a>
                                            </div>
                                            <div class="swiper-slide"> <a href="img\book-1-2.jpg" data-fancybox="3"
                                                    title="Zoom In"><img class="myimage"
                                                        src="{{ asset('images/' . $product->image) }}" alt="thumnails"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Thumbs swiper-container" id="thumbs">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"> <img src="{{ asset('images/' . $product->image) }}"
                                                    alt="thumnails">
                                            </div>
                                            <div class="swiper-slide"> <img src="{{ asset('images/' . $product->image) }}"
                                                    alt="thumnails">
                                            </div>
                                            <div class="swiper-slide"> <img src="{{ asset('images/' . $product->image) }}"
                                                    alt="thumnails">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6 text-center text-lg-left">
                                <div class="product-single-price">
                                    <h1 class="title-detail">{{ $product->name }}</h1>
                                    <h4><span class="real-price">{{ number_format($product->price, 3, '.', ',') }}
                                            VND</span></h4>
                                </div>

                                <!-- <div class="product-single-price">
                                        <p class="pro-description">{{ $product->description }}</p>
                                    </div> -->

                                <form action="{{ route('add_cart') }}" method="POST" class="row ">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <div class=" c0l-12 col-lg-3 d-lg-flex  align-items-lg-center d-inline-block">

                                        <input type="number" name="qty" value="1">

                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <button type="submit" class="btn green-color-yellow-gradient-btn">ADD TO
                                            CART</button>
                                    </div>
                                </form>


                                <div class="dropdown-divider"></div>

                                <div class="product-tags-list">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <p class="d-inline">SKU: <span>{{ $product->id }}</span></p>
                                            </li>
                                            <li class="breadcrumb-item"><span class="d-inline">Danh Mục: <a
                                                        href="javascript:void(0)">{{ $product->Category->name }}</a>
                                            </li>

                                        </ol>
                                    </nav>
                                </div>

                                <div class="share-product-details">
                                    <ul class="share-product-icons">
                                        <li>
                                            <p>Share Link:</p>
                                        </li>
                                        <li><a href="javascript:void(0)" class="facebook-bg-hvr"><i
                                                    class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="fab fa-twitter"
                                                    aria-hidden="true"></i></a> </li>
                                        <li><a href="javascript:void(0)" class="linkedin-bg-hvr"><i
                                                    class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                                        <li><a href="javascript:void(0)" class="instagram-bg-hvr"><i
                                                    class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12 mt-4 mb-4">
                                <div class="row no-gutters product-all-details">

                                    <ul class="col-12 nav nav-tabs" id="myTab" role="tablist">
                                        <li class="col-6 nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                                role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
                                        </li>

                                        <li class="col-6 nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact"
                                                role="tab" aria-controls="contact" aria-selected="false">Đánh giá
                                                (2)</a>
                                        </li>
                                    </ul>
                                    <div class="col-12 tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <p class="product-tab-description text-center text-lg-left">
                                                {{ $product->description }}</p>

                                        </div>

                                        <div class="tab-pane fade reviews" id="contact" role="tabpanel"
                                            aria-labelledby="contact-tab">
                                            @foreach ($comment as $binhluan)
                                                <div class="media">
                                                    <div class="row no-gutter">
                                                        <div class="col-12 col-lg-2 p-0">

                                                            <div class="row no-gutters">
                                                                <div class="col-12 d-flex  justify-content-center">
                                                                    <img src="{{asset('img/noAvatar.png')}}"
                                                                        alt="Generic placeholder image">
                                                                </div>
                                                                
                                                            </div>

                                                        </div>

                                                        <div class="col-12 col-lg-10 p-0">
                                                            <div class="media-body">
                                                                <span class="text-center text-lg-left d-block">{{ $binhluan->created_at }}</span>
                                                                <h5 class="mb-2 text-center text-lg-left">{{ $binhluan->User->name }}
                                                                </h5>
                                                                <p class="text-center text-lg-left">{{ $binhluan->comment }}</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="row pl-2 pr-2">
                                                <div class="col-12 d-flex mb-4 mt-3">
                                                    <h5 class="text-nowrap">Add Review</h5>
                                                    <hr class="w-100 ml-5">
                                                </div>
                                                <div class="col-12">
                                                    <form action="{{ route('comment', $product->id) }}" method="POST"
                                                        class="getin_form border-form" id="register">
                                                        @csrf
                                                        <div class="row">

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <!--                                                                            <label for="comment">Your Rating:</label>-->
                                                                    <textarea name="comment" class="form-control textareaclass" rows="5" id="comment"
                                                                        placeholder="Đánh giá của bạn"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="col-12 mt-3">
                                                                <div
                                                                    class="form-group d-flex justify-content-center d-lg-block">
                                                                    <button
                                                                        class="text-center btn green-color-yellow-gradient-btn">Đăng
                                                                    </button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>

        <!--START LATEST ARRIVALS-->
        <div class="lastest_arrivals">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h1>Sách liên quan</h1>
                    </div>

                    <div class="col-12">
                        <div id="js-grid-blog-posts" class="cbp">
    
                            @foreach ($splienquan as $splq)
                                <div class="cbp-item Classic Fantasy ">
                                    <form action="{{ route('add_cart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $splq->id }}">
                                        <input type="hidden" name="qty" value="1">
                                        <button type="submit" class="portfolio-circle-cart oubg-btn">
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                    </form>
    
                                    <div class="item"> <a href="{{ route('productDetail', $splq->id) }}"
                                            class="cbp-caption"><img src="{{ asset('images/' . $splq->image) }}"
                                                alt="Book 1"></a></div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <div class="cbp-l-grid-blog-title"><a
                                                    href="{{ route('productDetail', $splq->id) }}"
                                                    class="portfolio-title">{{ $splq->name }}</a></div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <div class="cbp-l-grid-blog-desc portfolio-des">
                                                {{ number_format($splq->price, 3, '.', ',') }} VND</div>
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

    </div>
    <!-- END HEADING SECTION -->

@endsection
