<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
         
    public function index(Request $request)
    {
        return view('admin.login');
    }

    
    public function userAdmin(Request $request)
    {
        $payload = [
            "name" => 'admin',
            "email" => 'admin@gmail.com',
            "password" => Hash::make("admin"),
            "role" => 'admin'
        ];

        User::create($payload);
    }

    public function DirectDashboard(Request $request)
    {
        return view('admin.pages.dashboard.index');
    }

    public function LoginProcess(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('admin-dashboard');
        }
 
        return back()->with('error_login','Username Atau Password Salah');
    }

    public function Logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
