<nav class="sidebar bg-primary">
    <ul>
        <li>
            <a href="{{ route('admin') }}"><i class="fa-solid fa-house ico-side"></i>Dashboards</a>
        </li>
        <li>
            <a href="{{ route('product') }}"><i class="fa-solid fa-cart-shopping ico-side"></i>Quản lý sản phẩm</a>
        </li>
        <li>
            <a href="{{ route('category') }}"><i class="fa-solid fa-folder-open ico-side"></i>Quản lý danh mục</a>
        </li>
        <li>
            <a href="{{ route('order') }}"><i class="fa-solid fa-mug-hot ico-side"></i>Quản lý đơn hàng</a>
        </li>
        <li>
            <a href="{{ route('users') }}"><i class="fa-solid fa-user ico-side"></i>Quản lý thành viên</a>
        </li>

        <li>
            <a href="{{ route('logout') }}"><i class="fa-solid fa-user ico-side"></i>Đăng xuất</a>
        </li>
    </ul>
</nav>