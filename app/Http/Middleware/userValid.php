<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\admin;
use App\Models\serviceConsumer;
use App\Models\serviceProvider;

class userValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $request->validate(["email"=>"required","password"=>"required"]);

        $em=$request->input('email');
        $pas=$request->input('password');

        $admin = admin::where('Email',"=",$em)->first();

        $sc = serviceConsumer::where('email',"=",$em)->first();

        $sp = serviceProvider::where('email',"=",$em)->first();
        if ($admin && $pas == $admin->Password){
            session()->put('email',$em);
            return redirect('/admin');
        }
        elseif($sc && $pas == $sc->sc_password)
        {
            return redirect('/users');
        }
        elseif($sp && $pas == $sp->password)
        {
            return redirect('/users');
        }
        else{
           return $next($request);
        }
    }
}
