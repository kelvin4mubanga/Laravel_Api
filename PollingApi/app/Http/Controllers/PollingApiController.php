<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PollingApi;

class PollingApiController extends Controller
{
    //
    
    public function index()
    {
        //return response()->Question::all(), 200);
        return response()->json(PollingApi::all(), 200);
    }

    public function store(Request $request)
    {
        $data = PollingApi::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id)
    {
        return response()->json(PollingApi::findOrFail($id), 200);
    }

    public function update(Request $request, $id)
    {
        $data = PollingApi::findOrFail($id);
        $data->update($request->all());
        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        PollingApi::destroy($id);
        return response()->json(null, 204);
    }
}
