<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{
    public function home(){
        $page=Page::where('title','Home')->first();
        return view('index',compact('page'));
    }
    public function contact(){
        $page=Page::where('title','Contact')->first();
        return view('contact',compact('page'));
    }
    public function SendMail(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ]);
        $data=[
          'name'=>$request->name,
          'email'=>$request->email,
          'message'=>$request->message
        ];
        Mail::to(\Setting::get('SEND_MAIL_TO'))->send(new SendMailable($data));
        return redirect()->back()->with(['message'=>'Thank you for contacting us we will get back to you shortly!','message-type'=>'success']);

    }

}
