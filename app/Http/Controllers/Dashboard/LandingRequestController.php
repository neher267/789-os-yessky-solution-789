<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Request as FlightRequest;
use App\LangingRequest;
use App\Country;

class LandingRequestController extends Controller
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
        return view('backend.pages.landing-request', compact('options'));
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
        $data->type = 'Landing';   //Overfly; Landing
        $data->user_id = request()->user()->id;
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

        $tran_id = $data->id;

        //$tran_id = rand(1,50);
        $request->session()->put('tran_id', $tran_id);
        $request->session()->put('type', 'FlightRequest');

        $this->addAdditionalData($data->id, $request);

        return redirect('dashboard/payment');

    }

    private function addAdditionalData($id, $request)
    {
        $data = new LangingRequest;
        $data->request_id = $id;
        $data->flightPlan = $request->flightPlan;
        $data->ospAgent = $request->ospAgent;
        $data->aocValidity = $request->aocValidity;
        $data->corValidity = $request->corValidity;
        $data->coaValidity = $request->coaValidity;
        $data->insuranceValidity = $request->insuranceValidity;
        $data->goingDepDate = $request->goingDepDate;
        $data->goingEtdUtc = $request->goingEtdUtc;
        $data->goingDepFrom = $request->goingDepFrom;
        $data->goingArrDate = $request->goingArrDate;
        $data->goingAtaUtc = $request->goingAtaUtc;
        $data->goingArrTo = $request->goingArrTo;
        $data->save();
        return;
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
        $data = FlightRequest::find($id);

        if ($data) {
            $data->status = $request->status;
            $data->save();            
        }
        return back()->withSuccess($request->status.' Success!');
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
