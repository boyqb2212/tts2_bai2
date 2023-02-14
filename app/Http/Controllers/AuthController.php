<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\ColumnResult;
use PHPUnit\Framework\Constraint\Operator;
use Throwable;
use App\Models\User;
class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function processLogin(Request $request)
    {
        try {
            $user = User::query()
                ->where('user',$request->get('user'))
                ->where('password',$request->get('password'))
                ->firstOrFail();

            session()->put('id',$user->id);
            session()->put('user',$user->user);
            session()->put('password',$user->password);
            session()->put('email',$user->email);
            session()->put('phone',$user->phone);
            session()->put('hoten',$user->hoten);
            session()->put('level',$user->level);
            return redirect()->route('index');
        }catch(Throwable $e){
            return redirect()->route('login');
        }
    }
    public function logout(){
        session()->flush();
        return redirect()->route('login');
    }
    public function register(){
        return view('auth.register');
    }
    public function store(Request $request){
       $user=new User();
        $user->user=$request->get('user');
        $user->password=$request->get('password');
        $user->hoten=$request->get('hoten');
        $user->email=$request->get('email');
        $user->phone=$request->get('phone');
        $user->level=$request->get('level');
        $user->save();
        return redirect()->route('login');
    }
}
