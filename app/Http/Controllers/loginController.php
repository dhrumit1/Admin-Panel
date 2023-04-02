<?php

namespace App\Http\Controllers;
// use Auth;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\serviceConsumer;
use App\Models\serviceProvider;

class loginController extends Controller
{
    Public function loginPage()
    {
        return view('login');
    }

    Public function adminDashboardPage(Request $request)
    {
        $request->validate(["email"=>"required","password"=>"required"]);
        $em=$request->input('email');
        $pas=$request->input('password');
        // echo "Email:".$em. "<br> password".$pas ;
    //     if(Auth::attempt(['Email'=>$em,'Password'=>$pas]))
    //    {
    //         // return redirect('/admindash');
    //         echo "ok";
    //     }
    //     else{
    //         echo "not";
    //     }
        // return view('DashBoard');
        $admin = admin::where('Email',"=",$em)->first();
        if ($admin && $pas == $admin->Password){
            return view('DashBoard');
        }
        else{
            return back()->withErrors([
                'lemail' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    Public function DashboardPage()
    {
        $sc = serviceConsumer::all()->count();
        $sp = serviceProvider::all()->count();
        $sum = $sc + $sp;

        $lastSc = serviceConsumer::latest()->take(5)->get();
        $lastSp = serviceProvider::latest()->take(5)->get();

        $data = compact('sc','sp','sum','lastSc','lastSp');
        return view('DashBoard')->with($data);
    }

    Public function ManageServiceConsumerPage()
    {
        return view('ManageServiceConsumer');
    }

    Public function ManageServiceProviderPage()
    {
        return view('ManageServiceProvider');
    }

    Public function logoutPage()
    {
        return view('login');
    }

    Public function addSCPage()
    {
        return view('addSC');
    }

    Public function editProfilePage()
    {
        return view('editProfile');
    }
}
