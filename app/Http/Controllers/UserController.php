<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('User.index',[
            'users'=>$users,
        ]);
    }
    public function xemchitiet(User $user)
    {

        return view('User.xemchitiet',[
            'user'=>$user,
        ]);



    }
    public function sua(User $user)
    {

        return view('User.edit', [
            'user' => $user,
        ]);
    }
    public function update(Request $request,User $user)
    {
        User::where('id',$user->id)->update($request->except(
            [
                '_token',
                '_method',
            ]
        ));


        return redirect()->route('index');
    }
    public function xoa(User $user){

        $user->delete();
        return redirect()->route('index');
    }
    public function suacanhan(User $user)
    {

        return view('User.editcanhan', [
            'user' => $user,
        ]);
    }
    public function updatecanhan(Request $request,User $user)
    {
        User::where('id',session()->get('id'))->update($request->except(
            [
                '_token',
                '_method',
            ]
        ));


        return redirect()->route('index');
    }
}
