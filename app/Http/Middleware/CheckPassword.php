<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Hash;

class CheckPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $hash=Hash::make('testView');
        $requestHash=$request->pass;
        if(Hash::check($hash,$requestHash)){
            Session::set('pass', $requestHash);
            return view('home');
        }
        return view('viewWebsite');
    }
}
