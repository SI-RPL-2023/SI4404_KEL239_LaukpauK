<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function registerView() {
        return view('user/Register');
    }

    public function registerUser(Request $request) {
        $validatedData = $request->validate(
            [
                'nama_lengkap' => 'required',
                'email' => 'required|email:rfc,dns|unique:users',
                'nohp' => 'required|min:11|max:13|unique:users',
                'alamat' => 'required',
                'password' => 'required|min:5|max:8|confirmed',
            ],
            [
                'nohp.required' => 'The Phone Number Field is Required',
                'alamat.required' => 'The Address Field is Required',
                'nohp.min' => 'The Phone Number field must not be less than 11 characters.',
                'nohp.max' => 'The Phone Number field must not be greater than 13 characters.',
            ]
        );

        $validatedData['password'] = Hash::make($validatedData['password']);

        if($request->hasFile('foto_user')) {
            $extension = $request->file('foto_user')->getClientOriginalExtension();
            $new_name = $request->nama_lengkap . '-' . now()->format('Y-m-d') . '.' . $extension;
            $img = $request->file('foto_user')->storeAs('fotoProfileUser', $new_name);
            $validatedData['foto_user'] = $img;
        }

        User::create($validatedData);

        return redirect('/login')->with('registerSuccess', 'Registrasi Berhasil!');
    }

    function loginView() {
        return view('user/Login');
    }

    public function loginUser(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:5|max:8',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if(auth()->user()->role === 'user') {
                return redirect()->intended('/');
            }

            return redirect()->intended('/admin');
        }

        return back()->with('loginError', 'Login gagal!');
    }

    public function logoutUser(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login')->with('logoutSuccess', 'Logout Berhasil!');
    }

    public function landingPageView() {
        return view('user/LandingPage');
    } 
}
