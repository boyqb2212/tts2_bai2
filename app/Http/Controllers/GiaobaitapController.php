<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Giaobaitap;
use Illuminate\Support\Facades\Storage;

class GiaobaitapController extends Controller
{
    public function taobaitap(){
        return view('Giaobaitap.taobaitap');
    }
    public function luubaitap(Request $request){
        $path = $request->file('filebaitap')->store('public/storefile');
        $giaobaitap=new Giaobaitap() ;
        $giaobaitap->tenbaitap=$request->get('tenbaitap');
        $giaobaitap->filebaitap=$path;
        $giaobaitap->save();
        return redirect()->route('index');
    }
    public function xembaitap(){
        $giaobaitaps=Giaobaitap::all();
        return view('Giaobaitap.xembaitap',[
            'giaobaitaps'=>$giaobaitaps,
        ]);
    }


    public function suabaitap(Giaobaitap $giaobaitap)
    {

        return view('Giaobaitap.suabaitap', [
            'giaobaitap' => $giaobaitap,
        ]);
    }
    public function updatebaitap(Request $request,Giaobaitap $giaobaitap)
    {
        $path=$request->file('filebaitap')->store('public/storefile');
        $giaobaitap->tenbaitap=$request->tenbaitap;
        $giaobaitap->filebaitap=$path;
        $giaobaitap->update();
      return redirect()->route('index');

    }
    public function xoabaitap(Giaobaitap $giaobaitap){

        $giaobaitap->delete();
        return redirect()->route('index');
    }

    public function download(Giaobaitap $giaobaitap)
    {

        return Storage::download($giaobaitap->filebaitap);

    }

}
