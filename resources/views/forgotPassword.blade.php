@extends('layout')
@section('title', 'Quên mật khẩu')
@section('content')


<!--slider sec strat-->
<section id="slider-sec" class="slider-sec parallax" style="background: url('img/banner1.1.jpg');">
</section>

<div class="container mt-3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center my-4">Quên mật khẩu</h1>
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
            <form action="{{route('check_forgot_password')}}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="#" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Nhập email">
                </div>
                
                <button type="submit" class="btn green-color-yellow-gradient-btn user-contact contact_btn w-100">Gửi Email</button>
            </form>
           
        </div>
    </div>
</div>

@endsection