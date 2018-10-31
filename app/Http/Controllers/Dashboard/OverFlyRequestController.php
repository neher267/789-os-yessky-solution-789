<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Request as FlightRequest;
use App\Country;

class OverFlyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = Country::orderBy('name', 'asc')->get();
        return view('backend.pages.overfly-request', compact('options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new FlightRequest;
        $data->user_id = request()->user()->id;
        $data->type = 'Overfly';
        $data->operator = $request->operatorName;
        $data->billing_add = $request->billingAddress;
        $data->aircraft_reg = $request->aircraftRegistration;
        $data->call_sign = $request->callsign;
        $data->trip_ref_no = $request->tripReferenceNo;
        $data->aircraft_type = $request->aircraftType;
        $data->max_weight = $request->mtow;
        $data->max_weight_unit = $request->mtowUnit;
        $data->purpose = $request->flightCategory;
        $data->goods_type = $request->dangerGoods;
        $data->notes = $request->notes;
        $data->flight_rules = $request->flightRules;
        $data->sector = $request->flightRoute;
        $data->flight_level = $request->flightLevel;
        $data->crew_count = $request->crewCount;
        $data->pax_count = $request->paxCount;
        $data->depar_date = $request->depDate;
        $data->arri_date = $request->arrDate;
        $data->etd_utc = $request->etdUtc;
        $data->eta_utc = $request->etaUtc;
        $data->aerodrome_of_departure = $request->depFrom;
        $data->aerodrome_of_estination = $request->arrTo;
        $data->fir_in = $request->firIn;
        $data->fir_out = $request->firOut;
        $data->status = 'pending';
        $data->save();
        return back()->withSuccess('Success!');
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
