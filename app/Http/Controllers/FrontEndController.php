<?php

namespace App\Http\Controllers;

use App\Mail\SendMailable;
use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\DataTables;

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
    public function ajax()
    {
        $pages=Page::all();
        return Datatables::of($pages)
            ->addColumn('action', function (Page $page) {
                $btn='<a href="pages/'.$page->id.'/edit" class="btn btn-primary"><i class="fa fa-edit"></i></a>';
                $btn.= view('pages.delete',compact('page'))->render();
                return $btn;
            })

            ->addColumn('index_allowed', function (Page $page) {
                if($page->index_allowed==1){
                    return 'Active';
                }else{
                    return 'Disable';
                }
            })
            ->rawColumns(['index_allowed','action'])
            ->make(true);
    }

}
