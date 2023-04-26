<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\serviceConsumer;
use App\Models\serviceProvider;
use App\Models\feedBack;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('editProfile');
        $adminSession = session()->get('email');
        $adminData = admin::where('Email', "=", $adminSession)->first();
        $adminName = $adminData->Name;
        $admin_id = $adminData->id;
        session()->put('admin_id', $admin_id);
        session()->put('Name', $adminName);


        $sc = serviceConsumer::all()->count();
        $sp = serviceProvider::all()->count();
        $sum = $sc + $sp;
        $fb = feedBack::all()->count();

        $lastSc = serviceConsumer::latest()->take(5)->get();
        $lastSp = serviceProvider::latest()->take(5)->get();
        // Rating chart
        $feed = DB::table('feedback')
            ->select('Rating', DB::raw('count(*) as total'))
            ->groupBy('Rating')
            ->get();

        $chartData1 = "";
        foreach ($feed as $list) {
            $chartData1 .= "['" . $list->Rating . "'," . $list->total . "],";
        }
        $arr1['chartData1'] = rtrim($chartData1, ",");

        // gender chart
        $feed = DB::table('service_consumer')
            ->select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->get();

        $chartData2 = "";
        foreach ($feed as $list) {
            $chartData2 .= "['" . $list->gender . "'," . $list->total . "],";
        }

        $arr2['chartData2'] = rtrim($chartData2, ",");

        $data = compact('sc', 'sp', 'sum', 'lastSc', 'lastSp', 'fb');
        return view('DashBoard', $arr1,$arr2)->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=> 'required|string',
            'name'=> 'required|string',
            'phoneNo'=> 'required|numeric|min:11',
            'email'=> 'required|email',
            'password'=>'required',
            'confirm_password'=>'required|same:password',
        ]);

        if ($request->password == $request->confirm_password) {
            $admin = new admin();
            $admin->UserName = $request->input('username');
            $admin->Name = $request->input('name');
            $admin->Mobile_No = $request->input('phoneNo');
            $admin->Email = $request->input('email');
            $admin->Password = $request->input('password');
            $admin->save();
            return redirect()->back()->with('sucess', 'Sucessfully register');
        } else {
            return redirect()->back()->with('error', 'Password does not match');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = admin::find($id);
        $data = compact('admin');
        return view('editProfile')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $image = $request->file('image');
        // $imageName = $image->getClientOriginalName();
        // $image->storeAs('public/images',$imageName);
        $request->validate([
            'U_userName'=> 'required|string',
            'U_name'=> 'required|string',
            'U_mobileNumber'=> 'required|numeric|min:11',
            'U_email'=> 'required|email',
        ]);

        $admin = admin::find($id);
        $admin->UserName = $request["U_userName"];
        $admin->Name = $request["U_name"];
        $admin->Mobile_No = $request["U_mobileNumber"];
        $admin->Email = $request["U_email"];
        $admin->save();
        return redirect()->back()->with('sucess','Data Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
