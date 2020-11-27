<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('api.index');
    }
    public function distance(Request $request)
    {
        $cUrl = curl_init();
        curl_setopt($cUrl,CURLOPT_URL, "https://www.distance24.org/route.json?stops=".$request->city1."|".$request->city2);
        curl_setopt($cUrl,CURLOPT_HEADER,0);
        curl_setopt($cUrl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($cUrl,CURLOPT_POST,0);

        $result = curl_exec($cUrl);
        curl_close($cUrl);
        $result = json_decode($result);
// dd($result->stops[0]->travelGuides[0]);
        Session::flash('result',  $result);
        return redirect()->back();
    }
    public function meteo(){
        $cUrl = curl_init();
        curl_setopt($cUrl,CURLOPT_URL, "https://api.meteo.lt/v1/places/vilnius/forecasts/long-term");
        curl_setopt($cUrl,CURLOPT_HEADER,0);
        curl_setopt($cUrl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($cUrl,CURLOPT_POST,0);

        $result = curl_exec($cUrl);
        curl_close($cUrl);
        $result = json_decode($result);
        // dd($result);
        // Session::flash('weather',  $result->forecastTimestamps[4]);
        return view('api.meteo',['weather'=>$result->forecastTimestamps[4]]);
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
