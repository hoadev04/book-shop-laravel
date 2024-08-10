@extends('layout')
@section('title', 'Liên hệ')
@section('content')

<!--Slider Start-->
<div class="map-load">
    <div id="map"></div>
</div>
<!--Slider End-->

<!-- Contact Us Start -->
<section class="contact-sec" id="contact-sec">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 contact-description wow slideInLeft" data-wow-delay=".8s">
                <div class="contact-detail wow fadeInLeft">
                    <div class="ex-detail">
                        <span class="fly-text">Liên Hệ Với Chúng Tôi</span>
                        <h4 class="large-heading">
                            <span class="heading-1">Liên</span>
                            <span class="heading-2">Lạc</span>
                        </h4>
                    </div>
                    <p class="small-text text-center text-md-left">
                        Chúng tôi luôn sẵn lòng lắng nghe và hỗ trợ bạn! Vui lòng liên hệ với chúng tôi qua các thông tin sau để chia sẻ ý kiến, đặt câu hỏi hoặc yêu cầu dịch vụ
                    </p>
                    <div class="row location-details text-center text-md-left">
                        <div class="col-12 col-md-6 country-1">
                            <h4 class="heading-text text-left">Cửa Hàng Sách</h4>
                            <ul>
                                <li><i class="fas fa-mobile-alt"></i><a href="#">+(84) 354951127</a></li>
                                <li><i class="fas fa-envelope"></i><a href="#">laithanhhoa16092004@gmail.com</a></li>
                                <li><i class="fas fa-map-marker"></i><a href="#"> 27 Nguyễn Công Hoan, P7, Phú Nhuận, TP.HCM</a></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 contact-box text-center text-md-left wow slideInRight" data-wow-delay=".8s">
                <div class="c-box wow fadeInRight">
                    <h4 class="small-heading">Để lại Tin nhắn</h4>
                    <form class="contact-form" id="contact-form-data">
                        <div class="row my-form">
                            <div class="col-md-12 col-sm-12">
                                <div id="result"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="candidate_fname" name="firstName" placeholder="Tên của bạn" required="required">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="candidate_lname" name="lastName" placeholder="Họ của bạn" required="required">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" class="form-control" id="user_email" name="userEmail" placeholder="Email" required="required">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" class="form-control" id="user_phone" name="userPhone" placeholder="Số điện thoại" required="required">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="user_message" name="userMessage" placeholder="Tin nhắn" rows="7" required="required"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn green-color-yellow-gradient-btn user-contact contact_btn" type="button">Gửi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us End -->

@endsection