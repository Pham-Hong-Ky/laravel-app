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

    public function register(Request $rq)
    {
        $password = $rq->input('pass');
        $account = $rq->input('account');
        $passcf = $rq->input('passcf');

        if (!isset($password) || !isset($account)) {
            return "khong duoc null";
        } else if ($password != $passcf) {
            return "hihi sai mat khau r";
        } else {
            return "Dang ky thanh cong";
        }
    }

    public function loginView()
    {
        return view('auth.login');
    }

    public function registerView()
    {
        return view('auth.register');
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
