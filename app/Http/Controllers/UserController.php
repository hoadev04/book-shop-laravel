<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserResetToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function login() {
        return view('login');
    }

    public function check_login(Request $request) {
        $data = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('admin')->with('ok', 'Bạn đã đăng nhập với vai trò quản trị viên'); 
        }
        return redirect()->back()->with('error', 'Tài khoản mật khẩu không đúng ! Vui lòng nhập lại.');
    }

    public function register() {
        return view('register');
    }

    public function check_register(Request $request) {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        try {
            User::create([
                'username' => $request->username,
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user', // Hoặc bất kỳ giá trị mặc định nào bạn muốn
            ]);

            return redirect()->route('register')->with('success', 'Đăng ký tài khoản thành công');
        } catch (\Throwable $th) {
            return redirect()->route('register')->with('error', 'Đăng ký tài khoản thất bại. Vui lòng thử lại.');
        }
    }


    public function change_password() {
        return view('changePassword');
    }

    public function check_change_password(Request $request) {
        $request->validate([
            'old_password' => ['required', function($attr, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    $fail('Mật khẩu của bạn không trùng khớp');
                }
            }],
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);
    
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thay đổi mật khẩu.');
        }
    
        $data['password'] = Hash::make($request->password);
        $check = Auth::user()->update($data);
    
        if ($check) {
            Auth::logout();
            return redirect()->route('login')->with('success', 'Thay đổi mật khẩu thành công');
        }
    
        return redirect()->back()->with('error', 'Có lỗi xảy ra! Vui lòng thử lại.');
    }


    public function forgot_password() {
        return view('forgotPassword');
    }


    public function check_forgot_password(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $users = User::where('email', $request->email)->first();
        $tokens = Str::random(50);

        $tokenData = [
            'email' => $request->email,
            'token' => $tokens
        ];

         // Xóa token cũ nếu có
         UserResetToken::where('email', $request->email)->delete();

         if (UserResetToken::create($tokenData)) {
            Mail::to($request->email)->send(new ForgotPassword($users, $tokens));

            return redirect()->back()->with('success', 'Gửi mail thành công! Vui lòng kiểm tra hộp thư để lấy lại mật khẩu');
         }
         return redirect()->back()->with('error', 'Có lỗi xảy ra! Vui lòng thử lại.');
       
    }

    public function reset_password($token) {
        UserResetToken::checkToken($token);
        return view('resetPassword');
    }

    public function check_reset_password($token) {
        request()->validate([
            'password' => 'required',
            'comfirm_password' => 'required|same:password'
        ]);

        $tokenData = UserResetToken::checkToken($token);
        $userData = $tokenData->users;

        $data = [
            'password' => bcrypt(request(('password')))
        ];
        $check = $userData->update($data);

        if ($check) {
            return redirect()->back()->with('success', 'Tạo mật khẩu mới thành công ');
        }
        return redirect()->back()->with('error', 'Tạo mật khẩu mới Thất bại ');
    }
    
    public function logout_user(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }

    
}
