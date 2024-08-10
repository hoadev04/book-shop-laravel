@extends('layout')
@section('title', 'Đăng Ký')
@section('content')


<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url('img/banner1.1.jpg');">
</section>

<div class="container mt-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center my-4">Thay đổi mật khẩu</h1>
            <form action="{{route('check_change_password')}}" method="POST">
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
                    <label for="#" class="form-label">Nhập mật khẩu cũ</label>
                    <input type="password" class="form-control" name="old_password" placeholder="Nhập mật khẩu cũ">
                    @error('old_password')
                        <small class="help-block">{{$message}} </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="#" class="form-label">Nhập mật khẩu mới</label>
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật mới">
                    @error('password')
                        <small class="help-block">{{$message}} </small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="#" class="form-label">Nhập lại mật khẩu mới</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Nhập lại mật khẩu mới">
                    @error('confirm_password')
                        <small class="help-block">{{$message}} </small>
                    @enderror
                </div>
                
                <button type="submit" class="btn green-color-yellow-gradient-btn user-contact contact_btn w-100">Đăng nhập</button>
            </form>
            
        </div>
    </div>
</div>

@endsection