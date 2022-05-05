<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrainTrip;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = TrainTrip::all();
        $data = [
            'trips' => $trips
        ];
        return view('home', $data);
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
        $newTrip = new TrainTrip;
        $newTrip->TrainProductor = $request->item["TrainProductor"];
        $newTrip->DepartureStation = $request->item["DepartureStation"];
        $newTrip->ArrivalStation = $request->item["ArrivalStation"];
        $newTrip->TrainID = $request->item["TrainID"];
        $newTrip->CarriagesNumber = $request->item["CarriagesNumber"];
        $newTrip->Delay = $request->item["Delay"];
        $newTrip->Deleted = $request->item["Deleted"];
        $newTrip->save();
        return $newTrip;
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
