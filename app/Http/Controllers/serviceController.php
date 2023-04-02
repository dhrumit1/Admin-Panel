<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabledata=service::all();
        return view("ManageServices",["tabledata"=>$tabledata]);
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
        $service = service::find($id);
        $data = compact('service');
        return view('serviceEdit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = service::find($id);
        $service -> service_name = $request["usnm"];
        $service -> service_img = $request["usimg"];
        $service -> description = $request["usdes"];
        $service -> save();
        return redirect('/service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
