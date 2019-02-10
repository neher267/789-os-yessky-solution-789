<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use App\Continent;
use App\Http\Requests\CountryRequest;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Country::latest()->get();
        return view('backend.pages.countries.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::orderBy('name', 'asc')->get();
        return view('backend.pages.countries.create', compact('continents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $data = new Country;
        $data->name = $request->name;
        $data->short_name = $request->short_name;
        $data->continent_id = $request->continent_id;
        $data->save();
        return back()->withSuccess('Success');
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
    public function edit(Country $country)
    {
        $continents = Continent::orderBy('name', 'asc')->get();
        return view('backend.pages.countries.edit', compact('country', 'continents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $country->name = $request->name;
        $country->short_name = $request->short_name;
        $country->continent_id = $request->continent_id;
        $country->save();
        return redirect('dashboard/countries')->withSuccess('Update Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return back()->withSuccess('Success!');
    }
}
