<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\serviceConsumer;
use App\Models\serviceProvider;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('editProfile');
        $adminSession = session()->get('email');
        $adminData = admin::where('Email',"=",$adminSession)->first();
        $adminName = $adminData->Name;
        $admin_id = $adminData->id;
        session()->put('admin_id',$admin_id);
        session()->put('Name',$adminName);


        $sc = serviceConsumer::all()->count();
        $sp = serviceProvider::all()->count();
        $sum = $sc + $sp;

        $lastSc = serviceConsumer::latest()->take(5)->get();
        $lastSp = serviceProvider::latest()->take(5)->get();

        $data = compact('sc','sp','sum','lastSc','lastSp');
        return view('DashBoard')->with($data);
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
       //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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

        $admin = admin::find($id);
        $admin -> UserName = $request["U_userName"];
        $admin -> Name = $request["U_name"];
        $admin -> Mobile_No = $request["U_mobileNumber"];
        $admin -> Email = $request["U_email"];
        $admin -> save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
