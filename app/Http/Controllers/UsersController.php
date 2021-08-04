<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

class UsersController extends Controller
{

    // Chức năng đăng nhập
    public function login(LoginRequest $request)
    {
        $remember = $request->remember === "on" ? true : false;
        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($user, $remember)) {
             return redirect("/");
            
        } else {
            dd("User isn't exist !!");
        }
    }

    // Chức năng đăng ký
    public function register(RegisterRequest $request)
    {
        try {
             User::insert(
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password)
                ]
            );
        } catch (\Throwable $th) {
            dd("User is exist");
        }
        
        return redirect("/page-login.html");
        
    }

    // Chức năng thoát
    public function logout()
    {
        Auth::logout();
        return redirect("/page-login.html");
    }
}
