<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPlannerApi;

class EventPlannerApiController extends Controller
{
    //
    public function index()
    {
        return response()->json(EventPlannerApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = EventPlannerApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(EventPlannerApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = EventPlannerApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        EventPlannerApi::destroy($id);
        return response()->json(null, 204);
    }     
}
