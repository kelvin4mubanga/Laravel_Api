<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TravelBookingApi;

class TravelBookingApiController extends Controller
{
    //
    public function index()
    {
        return response()->json(TravelBookingApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = TravelBookingApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(TravelBookingApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = TravelBookingApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        TravelBookingApi::destroy($id);
        return response()->json(null, 204);
    }
}
