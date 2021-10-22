<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\spartinfo;
use App\Models\Vehicle;
use App\Models\vhpartinfo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('vehicles', [
            "title" => "Vehicles",
            "vehicles" => Vehicle::all()
        ]);
    }
    public function showParts()
    {
        //
        return view('parts', [
            "title" => "Parts Catalog",
            "parts" => spartinfo::all()
        ]);
    }
    public function showVehicle($ID)
    {
        //
        return view('vin', [
            'title' => 'Vehicles Details',
            'vsinfo' => Vehicle::findOrFail($ID)
        ]);
    }
    public function vehmaintenance($ID)
    {
        //
        return view('vehmain', [
            'title' => 'Vehicles Maintenance',
            'vehmain' => vhpartinfo::findOrFail($ID)
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($ID)
    {
        //
        return view('vin', [
            "title" => "Vehicle Info",
            "vsinfo" => Vehicle::find($ID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
