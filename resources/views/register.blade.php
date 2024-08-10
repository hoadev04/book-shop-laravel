@extends('layout')
@section('title', 'Đăng Ký')
@section('content')


<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url('img/banner1.1.jpg');">
</section>

<div class="container mt-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center my-4">Đăng ký tài khoản</h1>
            @if (Session('error'))
            <div class="alert alert-danger">
                {{ Session('error') }}
            </div>
            @endif
            @if (Session('success'))
            <div class="alert alert-success">
                {{ Session('success') }}
            </div>
            @endif
            <form action="{{route('check_register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Họ và Tên</label>
                    <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Nhập email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                </div>
                <button type="submit" class="btn green-color-yellow-gradient-btn user-contact contact_btn w-100">Đăng ký</button>
            </form>
            <div class="text-center mt-3">
                <p>Bạn đã có tài khoản? <a href="{{route('login')}}">Đăng nhập ngay</a></p>
            </div>
        </div>
    </div>
</div>

@endsection