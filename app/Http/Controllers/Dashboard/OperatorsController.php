<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Operator;
use App\Country;
use App\Http\Requests\OperatorFormRequest;

class OperatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Operator::latest()->get();
        return view('backend.pages.operators.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = Country::orderBy('name', 'asc')->get();
        $page_title = "Create Operator";
        return view('backend.pages.operators.create', compact('page_title', 'options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OperatorFormRequest $request)
    {
        //dd($request->all())
        $data = new Operator;
        $data->country_id = $request->country_id;
        $data->created_by = auth()->user()->id;
        $data->city_id = $request->city_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address_line_1 = $request->address_line_1;
        $data->address_line_2 = $request->address_line_2;
        $data->business_phone = $request->business_phone;
        $data->postal_code = $request->postal_code;            
        $data->business_phone_extension = $request->business_phone_extension;
        $data->fax_number = $request->fax_number;
        $data->icao = $request->icao;
        $data->website = $request->website;
        $data->comment = $request->comment;
        $data->save();
        return back()->withSuccess("Create Success");
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
    public function destroy(Operator $operator)
    {
        $operator->delete();
        return back()->withSuccess('Success!');
    }
}
