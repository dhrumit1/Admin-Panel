<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('editProfile');
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
    //     $admin = new admin();
    //    if($request->hasfile('image'))
    //    {
    //         $file = $request->file('image');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $file->move('uploads/highlights/',$filename);
    //         $admin->image = $filename;
    //    }
    //    else
    //    {
    //     return $request;
    //     $admin->image = '';
    //    }
    //    $admin->save();
    //    return redirect()->back();

        // Validate the request
        $request->validate([
            'image' => 'required|image|max:2048',
        ]);

        // Store the image
        $path = $request->file('image')->store('public');

        // Return the path to the stored image
        return $path;
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
        // $data = compact('admin');
        // return view('editProfile')->with($data);
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
