<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->roles_id == 1) {
                $request->session()->put('role', 'admin');
            } elseif ($user->roles_id == 2) {
                $request->session()->put('role', 'user');
            }
    
            $request->session()->put('user', $user);
            return redirect()->intended('/user');
        }
    
        return redirect()->route('index')->with('error' , 'Đăng nhập thất bại, vui lòng kiểm tra lại email và mật khẩu');
    }
    

    public function showRegister()
    {
        return view('login.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'phone_number' => 'required|max:20', 
        ]);
    
        $existingUser = User::where('email', $validatedData['email'])->first();
    
        if ($existingUser) {
            return redirect()->route('showRegister')->withErrors(['email' => 'Địa chỉ email đã tồn tại.']);
        } else {
            $user = new User();
            $user->fullname = $validatedData['fullname'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            $user->phone_number = $validatedData['phone_number'];
            $user->roles_id = 2; 
            $user->save();
    
            return redirect()->route('user')->with('success', 'Đăng ký thành công, vui lòng đăng nhập.');
        }
    }
    

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        Auth::logout();
        return redirect()->route('index');
    }
}
