<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serviceConsumer;

class serviceConsumerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != '')
        {
            $tabledata=serviceConsumer::where("firstName","LIKE","$search%")->orwhere("phoneNo","LIKE","$search%")->get();
        }
        else
        {
            $tabledata=serviceConsumer::all();
        }
        $data = compact('search');
        return view("ManageServiceConsumer",["tabledata"=>$tabledata])->with($data);
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
        $request->validate([
            'fnm'=> 'required|string',
            'lnm'=> 'required|string',
            'gender'=>   'required|in:male,female,other',
            'phnum'=> 'required|numeric|min:11',
            'email'=> 'required|email',
            'pass'=>'required',
            'confirm_password'=>'required|same:pass',
        ]);

        $sc = new serviceConsumer();
        $sc ->firstName = $request->input('fnm');
        $sc ->lastName = $request->input('lnm');
        $sc ->email = $request->input('email');
        $sc ->phoneNo = $request->input('phnum');
        $sc ->sc_password = $request->input('pass');
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
        $request->validate([
            'uscfnm'=> 'required|string',
            'usclnm'=> 'required|string',
            'uscg'=>   'required|in:male,female,other',
            'uscpn'=> 'required|numeric|min:11',
            'usce'=> 'required|email'
        ]);
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
        return redirect('/serviceConsumer')->with('success', 'Data has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceConsumer=serviceConsumer::where("id",$id)->delete();
        // return redirect()->back();
        return redirect('/serviceConsumer')->with('success', 'Data has been deleted successfully.');
    }
}
