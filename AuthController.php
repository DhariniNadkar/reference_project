<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }
    public function login(Request $request) {
        $credentials = $request->validate([
            'email'=> 'required',
            'password'=> 'required']);
            
            if(\Auth::attempt($request->only('email','password'))) {
                return redirect('list');
            }
            return redirect('login')->withError('Login details are not valid');
    }

    public function register_view() {
        return view('auth.register');
    }
    public function register(Request $request) {
        
        $request->validate([
            'email'=> 'required|unique:users|email',
            'password'=> 'required|confirmed']);

            //save in user table
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> \Hash::make($request->password)
            ]);
        
        //login user after registered

        if(\Auth::attempt($request->only('email','password'))) {
            return redirect('list');
        }
        return redirect('register')->withError('Error');
    }

    // public function home() {
    //     return view('home');
    // }

    public function logout() {
        \Session::flush();
        \Auth::logout();
        return redirect('login');
    }
}
