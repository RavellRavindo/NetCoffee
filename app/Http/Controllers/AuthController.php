<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(){
        return view('register');
    }

    public function registerStore(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $data['password'] = bcrypt($data['password']);
   

        User::create($data);
        return redirect()->route('login');
    }

    public function Login(){
        return view('login');
    }

    public function loginStore(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if($request->email == "ravellaja@gmail.com" && $request->password == "sayaaja"){
            return view('adminPage');
        }
        else if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return back()->with('error','email or password wrong');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
