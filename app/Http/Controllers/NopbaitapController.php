<?php

namespace App\Http\Controllers;

use App\Models\Giaobaitap;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Nopbaitap;
use Illuminate\Support\Facades\Storage;

class NopbaitapController extends Controller
{
    public function taobaitapnop(Giaobaitap $giaobaitap){
        return view('Nopbaitap.taobaitapnop',[
            'giaobaitap'=>$giaobaitap,
        ]);
    }
    public function luubaitapnop(Request $request){
        $path = $request->file('filebaitap')->store('public/storefilenop');
        $nopbaitap=new Nopbaitap() ;
        $nopbaitap->id_giaobaitap=$request->get('id_giaobaitap');
        $nopbaitap->ten_giaobaitap=$request->get('ten_giaobaitap');
        $nopbaitap->filebaitap=$path;
        $nopbaitap->save();
        return redirect()->route('index');
    }

    public function xembaitapnop(Giaobaitap $giaobaitap)
    {
        $nopbaitaps= Nopbaitap::query()
            ->where('id_giaobaitap',$giaobaitap->id);
        return view('Nopbaitap.xembaitapnop', [
            'nopbaitaps' =>$nopbaitaps->get(),
        ]);
    }

    public function downloadnop(Nopbaitap $nopbaitap)
    {

        return Storage::download($nopbaitap->filebaitap);

    }
}
