<!-- START HEADER NAVIGATION -->
<div class="header-area fixed-header1 position-relative">
    <div class="container">
        <div class="row upper-nav">
            <div class=" text-left nav-logo">
                <a href="/" class="navbar-brand"><img src="{{ asset('img\logo.png')}}" alt="img"></a>
            </div>
            <div class="ml-auto nav-mega d-flex justify-content-end align-items-center">
                <header class="site-header" id="header">
                    <nav class="navbar navbar-expand-md  static-nav">
                        <div class="container position-relative megamenu-custom">
                            <a class="navbar-brand center-brand" href="index-book-shop.html">
                                <img src="img\logo.png" alt="logo" class="logo-scrolled">
                            </a>
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home') }}">TRANG CHỦ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('productList') }}">SÁCH</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">LIÊN HỆ</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('cart') }}">GIỎ HÀNG</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>


                </header>
                <div class="nav-utility">
                    <div class="manage-icons d-inline-block">
                        <ul class="d-flex justify-content-center align-items-center">
                            <li class="d-inline-block">
                                <a id="add_search_box">
                                    <i class="lni lni-search search-sidebar-hover"></i>
                                </a>
                            </li>
                           
                            <!-- <li>
                                <a href="{{ route('login') }}" class="d-inline-block  d-block">
                                <i class="lni lni-user"></i>
                                </a>
                            </li> -->

                            <nav class=" d-inline-block navbar navbar-expand-lg navbar-light p-0 ">
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav m-0">
                                        <li class=" dropdown mt-0">
                                            
                                            <a class=" dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="lni lni-user"></i> 
                                            </a>


                                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                                @auth
                                                <li><a class="dropdown-item" href="{{ route('history') }}">Lịch sử đơn hàng</a></li>
                                                <li><a class="dropdown-item" href="{{ route('change_password') }}">Đổi mật khẩu</a></li>
                                                <li><a class="dropdown-item" href="{{ route('logout') }}">Đăng xuất</a></li>
                                                @endauth

                                                @guest 
                                                <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
                                                <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a></li>
                                                @endguest
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END HEADER NAVIGATION -->