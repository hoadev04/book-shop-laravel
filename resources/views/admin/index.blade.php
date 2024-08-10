@extends('admin.layout')
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

<div class="main-content">
    <h3 class="title-page mb-3">
        Dashboards
    </h3>
    <section class="statistics row">
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="products.html">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            TỔNG SẢN PHẨM
                        </h5>
                    </div>
                    <span class="widget-numbers">0</span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="user.html">
                <div class="card mb-3 widget-chart">

                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            TỔNG DANH MỤC
                        </h5>
                    </div>
                    <span class="widget-numbers">0</span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="caterogies.html">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            TỔNG ĐƠN HÀNG
                        </h5>
                    </div>
                    <span class="widget-numbers">0</span>
                </div>
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <a href="#">
                <div class="card mb-3 widget-chart">
                    <div class="widget-subheading fsize-1 pt-2 opacity-10 text-warning font-weight-bold">
                        <h5>
                            TỔNG THÀNH VIÊN
                        </h5>
                    </div>
                    <span class="widget-numbers">0</span>
                </div>
            </a>
        </div>
    </section>
    <section class="row">
        <div class="col-sm-12 col-md-6 col xl-6">
            <div class="card chart">
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="date" class="form-control" placeholder="Username" aria-label="Username">
                        <span class="input-group-text">Đến ngày</span>
                        <input type="date" class="form-control" placeholder="Server" aria-label="Server">
                        <button type="button" class="btn btn-primary">Xem</button>
                    </div>
                </form>
                <p>Tổng doanh thu: <span>100.000.000 VND</span></p>
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Mã đơn hàng</th>
                        <th>Doanh thu</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Đơn hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>Mã đơn hàng</th>
                        <th>Trạng thái</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-xl-3">
            <div class="card chart">
                <h4>Khách hàng mới</h4>
                <table class="revenue table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Username</th>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection