<div>
    <h3>Chào, {{$users->name}}</h3>
    <p>Bạn đã yêu cầu đặt lại mật khẩu. Bấm vào nút bên dưới để đặt lại mật khẩu của bạn</p>
    <a href="{{route('reset_password', $tokens)}}" style="color:blue">Nhấn vào đây </a> để tạo mật khẩu mới
</div>