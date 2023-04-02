<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\serviceConsumer;

class scAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return serviceConsumer::all();
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
        echo "cnv";
        // $sc = new serviceConsumer();
        // $sc -> firstName = "abc";
        // $sc -> lastName = "xyz";
        // $sc -> gender = "male";
        // $sc -> phoneNo = 7878415540;
        // $sc -> email = "ada";
        // $result=$sc -> save();
        // if($result){
        //     return ["Result"=>"Data saved"];
        // }
        // else{
        //     return ["Result"=>"Data fails"];
        // }
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
        //
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
