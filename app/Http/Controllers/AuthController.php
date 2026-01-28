<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $rq)
    {
        $account = $rq->input('account');
        $password = $rq->input('pass');
        if ($account === 'phk' && $password === '0157667') {
            return response()->json(['message' => 'Login successful'], 200);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    public function CheckSignIn(Request $rq)
    {
        $password = $rq->input('pass');
        $account = $rq->input('account');
        $passcf = $rq->input('passcf');
        $class = $rq->input('class');
        $mssv = $rq->input('mssv');
        $gioitinh = $rq->input('gender');

        if (!isset($password) || !isset($account)) {
            return "Đăng ký không thành công, vui lòng điền đầy đủ thông tin";
        } else if ($password != $passcf) {
            return "Đăng ký không thành công, mật khẩu không khớp";
        } else if ($account == "phamhongky" && $mssv == "0157667" && $class == "67PM2" && $gioitinh == "male") {
            return "Đăng ký thành công tài khoản: " ;
        } else {
            return "Đăng ký không thành công";
        }
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function signInView()
    {
        return view('auth.signIn');
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
        return redirect('/');
    }
    
    public function ageVerifiView()
    {
        return view('auth.ageVerifi');
    }
}
