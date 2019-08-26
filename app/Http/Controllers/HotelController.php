<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hotels = Hotel::all();
        return view('admin.hotel.index',[
            "hotels" => $hotels,
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
        return view('admin.hotel.create');
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
        $hotels = new Hotel();
        $hotels->Hotel_name = Input::get("Hotel_name");
        $hotels->Hotel_tel = Input::get("Hotel_tel");
        $hotels->Hotel_taxid = Input::get("Hotel_taxid");
        $hotels->Hotel_address = Input::get("Hotel_address");
       
        
        $hotels->save();
        return redirect('admin/hotel');

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
    public function edit($Hotel_id)
    {
        //
        $hotels =  Hotel::findOrFail($Hotel_id);
        return view('admin.hotel.edit',[
            "hotels" => $hotels,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Hotel_id)
    {
        //
        $Hotel_name = $request->input('Hotel_name');
        $Hotel_tel = $request->input('Hotel_tel');
        $Hotel_taxid = $request->input('Hotel_taxid');
        $Hotel_address = $request->input('Hotel_address');
        $hotels = Hotel::findOrfail($Hotel_id);
        $hotels->Hotel_name = $Hotel_name;
        $hotels->Hotel_tel = $Hotel_tel;
        $hotels->Hotel_taxid = $Hotel_taxid;
        $hotels->Hotel_address= $Hotel_address;
        $hotels->save();
        return redirect('admin/hotel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Hotel_id)
    {
        //
        $Hotels = Hotel::findOrfail($Hotel_id);
        $Hotels->delete();
        return redirect('admin/hotel');
    }
}
