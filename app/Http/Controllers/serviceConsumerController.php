<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serviceConsumer;

class serviceConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabledata=serviceConsumer::all();
        return view("ManageServiceConsumer",["tabledata"=>$tabledata]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addSC');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sc = new serviceConsumer();
        $sc ->firstName = $request->input('fnm');
        $sc ->lastName = $request->input('lnm');
        $sc ->email = $request->input('email');
        $sc ->phoneNo = $request->input('phnum');
        $sc ->password = $request->input('pass');
        $sc ->gender = $request->input('gender');
        $sc ->save();
        return redirect('/serviceConsumer');
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
        $serviceConsumer = serviceConsumer::find($id);
        $data = compact('serviceConsumer');
        return view('scEdit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $serviceConsumer = serviceConsumer::find($id);
        $serviceConsumer -> firstName = $request["uscfnm"];
        $serviceConsumer -> lastName = $request["usclnm"];
        $serviceConsumer -> gender = $request["uscg"];
        $serviceConsumer -> phoneNo = $request["uscpn"];
        $serviceConsumer -> email = $request["usce"];
        $serviceConsumer -> Area = $request["usca"];
        $serviceConsumer -> City = $request["uscC"];
        $serviceConsumer -> pincode = $request["uscpc"];
        $serviceConsumer -> save();
        return redirect('/serviceConsumer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceConsumer=serviceConsumer::where("id",$id)->delete();
        return redirect()->back();
    }
}
