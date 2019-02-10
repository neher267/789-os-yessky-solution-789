<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Requests\AirportFormRequest;
use App\Http\Controllers\Controller;
use App\Country;
use App\Airport;

class AirportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Airport::with('country')->latest()->get();
        return view('backend.pages.airports.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = Country::orderBy('name', 'asc')->get();
        $page_title = "Create Airport";
        return view('backend.pages.airports.create', compact('page_title', 'options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AirportFormRequest $request)
    {
        //dd($request->all());
        $airport = new Airport;
        $airport->country_id = $request->country_id;
        $airport->created_by = auth()->user()->id;
        $airport->name = $request->name;
        $airport->city = $request->city;
        $airport->address = $request->address;
        $airport->info = $request->info;
        $airport->save();
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
    public function edit(Airport $airport)
    {
        $options = Country::orderBy('name', 'asc')->get();
        $page_title = 'Edit Airport: '.$airport->name;

        if (auth()->user()->id == $airport->created_by){
            return view('backend.pages.airports.edit', compact('airport','page_title', 'options'));
        }
        else{
            return redirect('dashboard/airports')->withSuccess('Unauthorized!');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airport $airport)
    {
        $airport->country_id = $request->country_id;
        $airport->name = $request->name;
        $airport->city = $request->city;
        $airport->address = $request->address;
        $airport->info = $request->info;
        $airport->save();
        return redirect('dashboard/airports')->withSuccess("Update Success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airport $airport)
    {
        $airport->delete();
        return back()->withSuccess('Success!');
    }
}
