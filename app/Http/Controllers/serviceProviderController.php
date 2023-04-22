<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serviceProvider;

class serviceProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != '')
        {
            $tabledata=serviceProvider::where("firstName","LIKE","$search%")->orwhere("phoneNo","LIKE","$search%")->get();
        }
        else
        {
            $tabledata=serviceProvider::all();
        }
        $data = compact('search');
        return view("ManageServiceProvider",["tabledata"=>$tabledata])->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addSP');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sp = new serviceProvider();
        $sp ->firstName = $request->input('fnm');
        $sp ->lastName = $request->input('lnm');
        $sp ->email = $request->input('email');
        $sp ->phoneNo = $request->input('phnum');
        $sp ->password = $request->input('pass');
        $sp ->gender = $request->input('gender');
        $sp ->save();
        return redirect('/serviceProvider');

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
        $serviceProvider = serviceProvider::find($id);
        $data = compact('serviceProvider');
        return view('spEdit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $serviceProvider = serviceProvider::find($id);
        $serviceProvider -> firstName = $request["uscfnm"];
        $serviceProvider -> lastName = $request["usclnm"];
        $serviceProvider -> gender = $request["uscg"];
        $serviceProvider -> phoneNo = $request["uscpn"];
        $serviceProvider -> email = $request["usce"];
        $serviceProvider -> Area = $request["usca"];
        $serviceProvider -> City = $request["uscC"];
        $serviceProvider -> pincode = $request["uscpc"];
        $serviceProvider -> save();
        return redirect('/serviceProvider')->with('success', 'Data has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceProvider=serviceProvider::where("id",$id)->delete();
        return redirect()->back()->with('success', 'Data has been deleted successfully.');
    }
}
