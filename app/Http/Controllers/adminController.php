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
        $aid = $adminData->id;


        $sc = serviceConsumer::all()->count();
        $sp = serviceProvider::all()->count();
        $sum = $sc + $sp;

        $lastSc = serviceConsumer::latest()->take(5)->get();
        $lastSp = serviceProvider::latest()->take(5)->get();

        $data = compact('sc','sp','sum','lastSc','lastSp','aid');
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
        // $admin = admin::find($id);
        // echo "$admin";
        // $data = compact('admin');
        return view('editProfile');
        // echo "$id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
