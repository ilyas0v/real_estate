<?php

namespace App\Http\Controllers;

use App\Home;
use App\Region;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::all();
        return view('admin.home.index')->withHomes($homes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        return view('admin.home.create')->withRegions($regions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
           'title' => 'required|string|min:5|max:100',
           'description' => 'required|string|min:5',
           'area' => 'integer|required',
           'price' => 'integer|required',
           'rooms' => 'integer|required',
           'floor' => 'integer|required',
           'has_garden' => 'integer|required',
           'registered' => 'integer|required',
           'is_flat' => 'integer|required',
           'is_rental' => 'integer|required',
           'is_fixed' => 'integer|required',
           'region_id' => 'integer|required',
        ]);

        $home = new Home();
        $home->title = $request->title;
        $home->description = $request->description;
        $home->price = $request->price;
        $home->area = $request->area;
        $home->rooms = $request->rooms;
        $home->floor = $request->floor;
        $home->has_garden = $request->has_garden;
        $home->registered = $request->registered;
        $home->is_flat = $request->is_flat;
        $home->is_rental = $request->is_rental;
        $home->is_fixed = $request->is_fixed;
        $home->region_id = $request->region_id;

        $home->save();

        return redirect()->route('homes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
