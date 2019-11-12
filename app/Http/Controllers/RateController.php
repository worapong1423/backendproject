<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Service\RateService;

class RateController extends Controller
{

    public function __construct()
    {
        $this->service = new RateService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($hotelId)
    {
        //
        return $this->service->getRate($hotelId);
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
    public function store(Request $request,$hotelId)
    {
        //
        return $this->service->saveRate($request->all(),$hotelId);
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
        return $this->service->getRateById($id);

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
        return $this->service->getRateById($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        return $this->service->updateRateById($request->get(
            'rates'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($hotelId,$id)
    {
        //
        return $this->service->destroyRateById($id);
    }
}
