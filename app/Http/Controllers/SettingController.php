<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Setting;
class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public  function  show(){

        if(Auth::user()->is_admin == 1) {
            $settings = Setting::all();
            return view('settings',compact('settings'));
        }else{
            return redirect('/');
        }
    }
    public function update(Request $request){
        Setting::set('SEND_MAIL_TO',$request->SEND_MAIL_TO);
        Setting::set('SCRIPT_FB',$request->SCRIPT_FB);
        Setting::set('SCRIPT_FB_EVENT',$request->SCRIPT_FB_EVENT);
        Setting::set('SCRIPT_GOOGLE',$request->SCRIPT_GOOGLE);
        Setting::save();
        return redirect()->back();
    }
}
