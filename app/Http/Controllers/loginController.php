<?php

namespace App\Http\Controllers;
// use Auth;
use Illuminate\Support\Facades\Password;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use App\Models\feedBack;
use Illuminate\Http\Request;
use App\Models\serviceConsumer;
use App\Models\serviceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class loginController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function adminDashboardPage()
    {
        // $request->validate(["email"=>"required","password"=>"required"]);
        // $em=$request->input('email');
        // $pas=$request->input('password');

        // $admin = admin::where('Email',"=",$em)->first();
        // if ($admin && $pas == $admin->Password){
        //     session()->put('email',$em);
        //     return redirect('/admin');
        // }
        // else{
        //     return redirect('/users');
        // }
        return redirect('/')->with('error', 'Please Enter the valid username and password');
    }

    public function DashboardPage()
    {
        // $adminSession = session()->get('email');
        // $adminData = admin::where('Email',"=",$adminSession)->first();


        // $sc = serviceConsumer::all()->count();
        // $sp = serviceProvider::all()->count();
        // $sum = $sc + $sp;

        // $lastSc = serviceConsumer::latest()->take(5)->get();
        // $lastSp = serviceProvider::latest()->take(5)->get();

        // $data = compact('sc','sp','sum','lastSc','lastSp','adminData');
        // return view('DashBoard')->with($data);
        // return view('DashBoard');
        // echo "ok";
    }

    public function UserPage()
    {
        return view('users');
    }

    public function ManageServiceConsumerPage()
    {
        return view('ManageServiceConsumer');
    }

    public function ManageServiceProviderPage()
    {
        return view('ManageServiceProvider');
    }

    public function logoutPage()
    {
        if (session()->has('admin_id')) {
            session()->forget('admin_id');
            return redirect('/');
        }
    }

    public function addSCPage()
    {
        return view('addSC');
    }

    public function forgotPasswordPage()
    {
        return view('forgot-password');
    }

    // Public function editProfilePage($id)
    // {
    //     $ad = admin::find($id);
    //     echo "$ad->Email";
    //     return view('editProfile',['ad'=>$ad]);
    // }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $token = Str::random(40);

        $data = ['token' => $token];
        $email['to'] = $request->email;

        Mail::send('mail', $data, function ($message) use ($email) {
            $message->to($email['to'])
                ->subject('Test email');
        });

        echo "ok";
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('resetPass')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function updatePassword(Request $request)
    {
        echo "oh";
    }

    public function addAdmin(Request $request)
    {
        return view('Add-admin');
    }

    public function feedBack(Request $request)
    {
        $feedback = feedBack::all();
        return view('feedback', ['feedback' => $feedback]);
    }

    public function chart()
    {
        // $feed = DB::table('feedback')
        //     ->select('Rating', DB::raw('count(*) as total'))
        //     ->groupBy('Rating')
        //     ->get();

        // $chartData = "";
        // foreach ($feed as $list) {
        //     $chartData.="['".$list->Rating."',".$list->total."],";
        // }
        // $arr['chartData'] = rtrim($chartData,",");
        // return view('chart',$arr);
        // dd($feed);

        $scdata = serviceConsumer::all()->count();
        $spdata = serviceConsumer::all()->count();

        // $sc = ['service consumer',$scdata];
        // $sp = ['service provider',$spdata];

        $data = compact('scdata','spdata');
        // echo json_encode($sc);
        return view('chart')->with($data);

    }
}
