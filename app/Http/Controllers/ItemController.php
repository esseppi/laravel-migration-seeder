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
    public function home(Request $request)
    {
        $trips = TrainTrip::all();
        return view('home', compact('trips'));
    }

    public function search()
    {
        $search_text = $_GET['query'];
        $trips = TrainTrip::where('ArrivalStation', 'LIKE', '%' . $search_text . '%')->get();
        return view('home', compact('trips'));
    }


    public function read($id)
    {
        $existingItem = TrainTrip::find($id);
        if ($existingItem) {
            return $existingItem;
        }
        return 'item not found';
    }

    public function delete($id)
    {
        $existingItem = TrainTrip::find($id);
        if ($existingItem) {
            $existingItem->delete();
            return redirect()->back();
        }
        return 'item not found';
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
        $newTrip->DepartureTime = $request->item["DepartureTime"];
        $newTrip->ArrivalTime = $request->item["ArrivalTime"];
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
}
