<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function inbox(User $user)
    {

        return view('Message.inbox', [
            'user' => $user,
        ]);
    }
    public function storeinbox(Request $request){
        $message=new Message();
        $message->id_nguoigui=$request->get('id_nguoigui');
        $message->user_nguoigui=$request->get('user_nguoigui');
        $message->id_nguoinhan=$request->get('id_nguoinhan');
        $message->user_nguoinhan=$request->get('user_nguoinhan');
        $message->tinnhan=$request->get('tinnhan');
        $message->save();
        return redirect()->route('index');
    }
    public function indexinbox(User $user)
    {
        $messages= Message::query()
            ->where('id_nguoigui',session()->get('id'))
            ->where('id_nguoinhan',$user->id);

        return view('Message.indexinbox', [
            'messages' => $messages->get(),
        ]);
    }


    public function xoainbox(Message $message){

        $message->delete();
        return redirect()->back();
    }

    public function inboxsua(Message $message)
    {

        return view('Message.edit', [
            'message' => $message,
        ]);
    }
    public function inboxupdate(Request $request,Message $message)
    {
        Message::where('id',$message->id)->update($request->except(
            [
                '_token',
                '_method',
            ]
        ));


        return redirect()->route('index');
    }

    public function indexhopthuden()
    {
        $messages= Message::query()
            ->where('id_nguoinhan',session()->get('id'));

        return view('Message.indexhopthuden', [
            'messages' => $messages->get(),
        ]);
    }
}
