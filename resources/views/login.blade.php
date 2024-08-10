@extends('layout')
@section('title', 'Đăng Ký')
@section('content')


<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url('img/banner1.1.jpg');">
</section>

<div class="container mt-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center my-4">Đăng nhập</h1>
            <form action="{{route('check_login')}}" method="POST">
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
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng nhập">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                </div>
                <button type="submit" class="btn green-color-yellow-gradient-btn user-contact contact_btn w-100">Đăng nhập</button>
            </form>
            <div class="text-center mt-3">
                <p><a href="{{route('forgot_password')}}">Quên mật khẩu?</a></p>
                <p>Chưa có tài khoản? <a href="{{route('register')}}">Đăng ký ngay</a></p>
            </div>
        </div>
    </div>
</div>

@endsection