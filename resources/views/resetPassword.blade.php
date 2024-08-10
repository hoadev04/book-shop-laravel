@extends('layout')
@section('title', 'Tạo lại mật khẩu mới')
@section('content')


<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url('img/banner1.1.jpg');">
</section>

<div class="container mt-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center my-4">Tạo lại mật khẩu mới</h1>
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
            <form action="" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu mới</label>
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" name="comfirm_password" placeholder="Nhập mật khẩu">
                </div>
                <button type="submit" class="btn green-color-yellow-gradient-btn user-contact contact_btn w-100">Đặt lại mật khẩu mới</button>
            </form>
            
        </div>
    </div>
</div>

@endsection