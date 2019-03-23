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
        //dd($request->all());
        $operator = new Operator;
        $operator->country_id = $request->country_id;
        $operator->created_by = auth()->user()->id;
        $operator->name = $request->name;
        $operator->address_line_1 = $request->address_line_1; 
        $operator->icao = $request->icao;
        $operator->callsign = $request->callsign;
        $operator->save();
        return back()->withSuccess("Create Success!");
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
    public function edit(Operator $operator)
    {
        $options = Country::orderBy('name', 'asc')->get();
        $page_title = 'Edit Operator';

        if (auth()->user()->id == $operator->created_by){
            return view('backend.pages.operators.edit', compact('operator','page_title', 'options'));
        }
        else{
            return redirect('dashboard/operators')->withSuccess('Unauthorized!');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operator $operator)
    {
        $operator->country_id = $request->country_id;
        $operator->name = $request->name;
        $operator->address_line_1 = $request->address_line_1;
        $operator->icao = $request->icao;
        $operator->callsign = $request->callsign;
        $operator->save();
        return redirect('dashboard/operators')->withSuccess("Update Success");
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
