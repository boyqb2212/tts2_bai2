<?php

namespace App\Http\Controllers;

use App\Models\Giaobaitap;
use App\Models\Trochoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class TrochoiController extends Controller
{
    public function taotrochoi(){
        return view('Trochoi.taotrochoi');
    }
    public function luutrochoi(Request $request){

        $file = $request->file('filebaitap');
        if($file->getClientOriginalExtension()==='txt'){
            $path = $request->file('filebaitap')->storeAs('public/storefiletrochoi',$request->filebaitap->getClientOriginalName());
            $trochoi=new Trochoi() ;
            $trochoi->tencauhoi=$request->get('tencauhoi');
            $trochoi->goiy=$request->get('goiy');
            $trochoi->filebaitap=$path;
            $trochoi->save();
            return redirect()->route('index');
        }
        else{
           echo "File ko hop le";
        }


    }

    public function xemtrochoi(){
        $trochois=Trochoi::all();
        return view('Trochoi.xemtrochoi',[
            'trochois'=>$trochois,
        ]);
    }
    public function traloi(){
        return view('Trochoi.traloi'

        );
    }
    public function checktraloi(Request $request){

    $path=storage_path("app\public\storefiletrochoi\\$request->dapan.txt");
    if($url=File::exists($path)){
        $content = File::get($path);
        echo $content;
    }else{
        echo "Đáp án sai, mời nhập lại:";


        return view('Trochoi.traloi'

        );
    }
    }
}
