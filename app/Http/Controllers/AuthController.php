<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function login(Request $rq)
    {
        if(Auth::attempt([
            'email' => $rq->input('email'),
            'password' => $rq->input('pass')
        ])) {
            return redirect('/product');
        } else {
            return back()->with('error', 'Đăng nhập không thành công, vui lòng kiểm tra lại tài khoản và mật khẩu');
        }
    }

    public function CheckSignIn(Request $rq)
    {
        // Validate dữ liệu đầu vào
        $validated = $rq->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'pass' => ['required', Password::min(6)],
            'passcf' => 'required|same:pass',
        ], [
            'name.required' => 'Vui lòng nhập họ tên',
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Email không hợp lệ',
            'email.unique' => 'Email đã được sử dụng',
            'pass.required' => 'Vui lòng nhập mật khẩu',
            'pass.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'passcf.required' => 'Vui lòng nhập lại mật khẩu',
            'passcf.same' => 'Mật khẩu xác nhận không khớp',
        ]);

        try {
            // Tạo user mới
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => $validated['pass'], // Laravel tự động hash nhờ cast 'hashed'
            ]);

            // Tự động đăng nhập sau khi đăng ký
            Auth::login($user);

            return redirect('/product')->with('success', 'Đăng ký thành công!');
        } catch (\Exception $e) {
            return back()->with('error', 'Đăng ký không thành công. Vui lòng thử lại.');
        }
    }

    public function loginView()
    {
        return view('admin.auth.login');
    }

    public function signInView()
    {
        return view('admin.auth.signIn');
    }

    public function ageVerifi(Request $rq)
    {
        $age = (int) $rq->input('age');
        
        if ($age < 18) {
            return redirect()->route('auth.ageVerifiView')
                ->with('error', 'Bạn phải đủ 18 tuổi để truy cập trang web này.');
        }
        
        session()->put('age', $age);
        session()->save();
        return redirect('/auth/loginView');
    }
    
    public function ageVerifiView()
    {
        return view('admin.auth.ageVerifi');
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        return redirect('/auth/loginView')->with('success', 'Đăng xuất thành công!');
    }
}
